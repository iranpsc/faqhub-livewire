<?php

namespace App\Livewire\SingleQuestion;

use App\Enum\CommentableEnums;
use App\Services\SingleQuestionService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SingleQuestion extends Component
{
    public $slug;

    public $question;
    protected $apiService;

    public $commentContent = '';

    public $answerContent = '';

    public $commentEditMode = 'create';

    public $editingCommentId = null;

    public $replyingCommentId = null;

    public $answerEditMode = 'create';

    public $editingAnswerId = null;

    public $answerCommentContent = [];

    public function __construct()
    {
        $this->apiService = app(SingleQuestionService::class);
    }

    public function mount()
    {
        try {
            $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
        } catch (\Exception $exception) {
            $this->addError('api_error', $exception->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.single-question.single-question', [
            'question' => $this->question
        ])->layout('layout.app');
    }

    public function createComment()
    {
        if (Auth::check()) {
            $data = [
                'user_id' => Auth::id(),
                'commentable_id' => $this->question['data']['id'],
                'commentable_type' => CommentableEnums::QUESTION->value,
                'content' => $this->commentContent
            ];
            $this->commentContent = '';
            try {
                $this->apiService->createComment('questions/comment/create', $data);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            return redirect()->route('login');
        }
    }


    public function deleteComment($commentId)
    {
        if (Auth::check()) {
            try {
                $this->apiService->deleteComment('questions/comment/delete/' . $commentId);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function setCommentEditMode($commentId)
    {
        try {
            $this->commentEditMode = 'edit';
            $this->editingCommentId = $commentId;
            $editComment = json_decode($this->apiService->getSpecificComment('questions/comment/' . $commentId), true);
            $this->commentContent = $editComment['data']['content'];
        } catch (\Exception $exception) {
            $this->addError('api_error', $exception->getMessage());
        }
    }

    public function updateComment()
    {
        if ($this->editingCommentId === null) {
            return $this->addError('update_error', 'No comment is selected for editing.');
        }
        if (Auth::check()) {
            $baseUrl = config('apiservice.api.base_url');
            $endpoint = 'questions/comment/update/' . $this->editingCommentId;
            try {
                $data = [
                    'user_id' => Auth::id(),
                    'content' => $this->commentContent,
                    'status' => 1
                ];
                $this->commentContent = '';

                $response = Http::withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ])->post($baseUrl . $endpoint, [
                    'user_id' => $data['user_id'],
                    'status' => $data['status'],
                    'content' => $data['content'],
                ]);
                if ($response->successful()) {
                    $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
                    $this->commentEditMode = 'create';
                    $this->editingCommentId = null;
                } else {
                    $this->addError('api_error', 'Failed to update the comment.');
                }
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function likeComment($commentId)
    {
        if (Auth::check()) {

            try {
                $data = [
                    'user_id' => Auth::id(),
                    'vote_type' => 1,
                    'vote_model' => CommentableEnums::COMMENT->value,
                    'vote_id' => $commentId,
                ];
                $response = $this->apiService->likeComment('questions/vote/create', $data);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function disLikeComment($commentId)
    {
        if (Auth::check()) {
            try {
                $data = [
                    'user_id' => Auth::id(),
                    'vote_type' => 0,
                    'vote_model' => CommentableEnums::COMMENT->value,
                    'vote_id' => $commentId,
                ];
                $response = $this->apiService->likeComment('questions/vote/create', $data);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function setCommentReplyMode($commentId)
    {
        $this->commentEditMode = 'reply';
        $this->replyingCommentId = $commentId;
    }


    public function replyComment()
    {
        if (Auth::check()) {
            $data = [
                'user_id' => Auth::id(),
                'commentable_id' => $this->replyingCommentId,
                'commentable_type' => CommentableEnums::COMMENT->value,
                'content' => $this->commentContent
            ];
            $this->commentContent = '';
            try {
                $this->apiService->createComment('questions/comment/create', $data);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
                $this->commentEditMode = 'create';
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function createAnswer()
    {
        if (Auth::check()) {
            try {
                $data = [
                    'user_id' => Auth::id(),
                    'question_id' => $this->question['data']['id'],
                    'content' => $this->answerContent,
                    'is_accepted' => 0,
                    'is_correct' => 0,
                ];
                $this->apiService->createAnswer('questions/answer/create', $data);
                $this->answerContent = '';
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function deleteAnswer($answerId)
    {
        if (Auth::check()) {
            try {
                $this->apiService->deleteAnswer('questions/answer/delete/' . $answerId);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function setAnswerEditMode($answerId)
    {
        if (Auth::check()) {
            $this->answerEditMode = 'edit';
            $this->editingAnswerId = $answerId;
            $answerContent = json_decode($this->apiService->getSpecificAnswer('questions/answer/' . $this->editingAnswerId));
            $this->answerContent = $answerContent->data->content;
        } else {
            $this->redirectRoute('login');
        }
    }

    public function updateAnswer()
    {
        if (Auth::check()) {
            try {
                $data = [
                    'user_id' => Auth::id(),
                    'question_id' => $this->question['data']['id'],
                    'content' => $this->answerContent,
                    'is_accepted' => 0,
                ];
                $this->apiService->updateAnswer('questions/answer/update/' . $this->editingAnswerId, $data);
                $this->answerContent = '';
                $this->answerEditMode = 'create';
                $this->editingAnswerId = null;
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function replyAnswer($answerId)
    {
        if (Auth::check()) {
            if (!isset($this->answerCommentContent[$answerId]) || empty($this->answerCommentContent[$answerId])) {
                session()->flash('error', 'دیدگاه نمی‌تواند خالی باشد.');
                return;
            }
            try {
                $data = [
                    'user_id' => Auth::id(),
                    'commentable_id' => $answerId,
                    'commentable_type' => CommentableEnums::ANSWER->value,
                    'content' => $this->answerCommentContent[$answerId]
                ];
                $this->apiService->createComment('questions/comment/create', $data);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
                $this->answerCommentContent[$answerId] = '';
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function likeAnswer($answerId)
    {
        if (Auth::check()) {

            try {
                $data = [
                    'user_id' => Auth::id(),
                    'vote_type' => 1,
                    'vote_model' => CommentableEnums::ANSWER->value,
                    'vote_id' => $answerId,
                ];

                $this->apiService->likeAnswer('questions/vote/create', $data);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function disLikeAnswer($answerId)
    {
        if (Auth::check()) {
            try {
                $data = [
                    'user_id' => Auth::id(),
                    'vote_type' => 0,
                    'vote_model' => CommentableEnums::ANSWER->value,
                    'vote_id' => $answerId,
                ];
                $response = $this->apiService->disLikeAnswer('questions/vote/create', $data);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function updateAnswerStatus($answerId)
    {
        if (Auth::check()) {
            try {
                $this->apiService->changeAnswerStatus('questions/answer/update-status/' . $answerId);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function likeQuestion($questionId)
    {
        if (Auth::check()) {
            try {
                $data = [
                    'user_id' => Auth::id(),
                    'vote_type' => 1,
                    'vote_model' => CommentableEnums::QUESTION->value,
                    'vote_id' => $questionId,
                ];
                $this->apiService->likeQuestion('questions/vote/create', $data);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function disLikeQuestion($questionId)
    {
        if (Auth::check()) {
            try {
                $data = [
                    'user_id' => Auth::id(),
                    'vote_type' => 0,
                    'vote_model' => CommentableEnums::QUESTION->value,
                    'vote_id' => $questionId,
                ];
                $this->apiService->likeQuestion('questions/vote/create', $data);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

    public function pinQuestion()
    {
        if (Auth::check()) {
            try {
                $response = $this->apiService->pinQuestion('questions/question/pin/' . $this->question['data']['slug']);
                $this->question = json_decode($this->apiService->getData('questions/question/' . $this->slug), true);
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }

}
