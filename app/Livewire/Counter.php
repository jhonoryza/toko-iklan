<?php

namespace App\Livewire;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Livewire\Component;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;

class Counter extends Component implements HasForms, HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                MarkdownEditor::make('content'),
            ])
            ->statePath('data');
    }

    public function create()
    {
        // dd($this->form->getState());
        $this->form->validate();
        Notification::make()
            ->title('Saved successfully')
            ->body('cool')
            ->success()
            ->send();
    }

    protected function submitAction(): Action
    {
        return Action::make('submit')
            ->label('submit')
            ->requiresConfirmation()
            ->action(fn () => $this->create());
    }

    public $counter = 0;

    public function increment(): void
    {
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
