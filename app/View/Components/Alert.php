<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public string $message;
    public string $title;

    /**
     * Create a new component instance.
     */
    public function __construct(string $type, string $message, string $title)
    {
        $this->type = $type;
        $this->message = $message;
        $this->title = $title;
    }

    public function getBgClass(): string
    {
        $bgClass = [
            'success' => 'bg-green-50',
            'error' => 'bg-red-50',
            'warning' => 'bg-yellow-50',
            'info' => 'bg-blue-50',
        ];

        return $bgClass[$this->type];
    }

    public function getTitleClass(): string
    {
        $titleClass = [
            'success' => 'text-green-800',
            'error' => 'text-red-800',
            'warning' => 'text-yellow-800',
            'info' => 'text-blue-800',
        ];

        return $titleClass[$this->type];
    }

    public function getMessageClass(): string
    {
        $messageClass = [
            'success' => 'text-green-700',
            'error' => 'text-red-700',
            'warning' => 'text-yellow-700',
            'info' => 'text-blue-700',
        ];

        return $messageClass[$this->type];
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
