<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public const CLOSED_WINDOW = 'closed_window';
    public const TWO_PARTS_WINDOW = 'two_parts_window';
    public const THREE_PARTS_WINDOW = 'three_parts_window';
    public const DOORS = 'doors';
    public const FIRST_GLAZING_FACTOR = 'first_glazing_factor';
    public const SECOND_GLAZING_FACTOR = 'second_glazing_factor';
    public const THIRD_GLAZING_FACTOR = 'third_glazing_factor';

    public string $selectedType = self::CLOSED_WINDOW;
    public string $glazingFactor = self::FIRST_GLAZING_FACTOR;
    public ?int $width = null;
    public ?int $height = null;

    public function render()
    {
        $data = $this->data();

        return view('livewire.calculator', [
            'types' => $this->types(),
            'images' => $this->images(),
            'price' => $this->calcPrice(),
            'maxWidth' => $data[$this->selectedType]['max_width'],
            'minWidth' => $data[$this->selectedType]['min_width'],
            'maxHeight' => $data[$this->selectedType]['max_height'],
            'minHeight' => $data[$this->selectedType]['min_height'],
        ]);
    }

    public function types(): array
    {
        return [
            self::CLOSED_WINDOW => 'Глухе вікно',
            self::TWO_PARTS_WINDOW => 'Вікно на 2 частини',
            self::THREE_PARTS_WINDOW => 'Вікно на 3 частини',
            self::DOORS => 'Двері',
        ];
    }

    public function images(): array
    {
        return [
            self::CLOSED_WINDOW => asset('assets/images/calculator/1.jpg'),
            self::TWO_PARTS_WINDOW => asset('assets/images/calculator/2.png'),
            self::THREE_PARTS_WINDOW => asset('assets/images/calculator/3.png'),
            self::DOORS => asset('assets/images/calculator/4.jpg'),
        ];
    }

    public function calcPrice(): ?int
    {
        if (!$this->width || !$this->height) {
            return null;
        }

        $data = $this->data();

        return $this->width
            * $this->height
            * $data[$this->selectedType]['square_m_price']
            * $data[$this->selectedType][$this->glazingFactor]
            * 0.000001;
    }

    public function updatedWidth($value): void
    {
        $this->improveWidth();
    }

    public function updatedHeight($value): void
    {
        $this->improveHeight();
    }

    public function updatedSelectedType($value): void
    {
        if ($this->height) {
            $this->improveHeight();
        }

        if ($this->width) {
            $this->improveWidth();
        }
    }

    private function improveWidth(): void
    {
        $data = $this->data();

        if ($this->width < $data[$this->selectedType]['min_width']) {
            $this->width = $data[$this->selectedType]['min_width'];
        }

        if ($this->width > $data[$this->selectedType]['max_width']) {
            $this->width = $data[$this->selectedType]['max_width'];
        }
    }

    private function improveHeight(): void
    {
        $data = $this->data();

        if ($this->height < $data[$this->selectedType]['min_height']) {
            $this->height = $data[$this->selectedType]['min_height'];
        }

        if ($this->height > $data[$this->selectedType]['max_height']) {
            $this->height = $data[$this->selectedType]['max_height'];
        }
    }

    private function data(): array
    {
        return [
            self::CLOSED_WINDOW => [
                'min_width' => 500,
                'max_width' => 1500,
                'min_height' => 500,
                'max_height' => 1500,
                'square_m_price' => 1780,
                self::FIRST_GLAZING_FACTOR => 1,
                self::SECOND_GLAZING_FACTOR => 1.15,
                self::THIRD_GLAZING_FACTOR => 1.45,
            ],
            self::TWO_PARTS_WINDOW => [
                'min_width' => 900,
                'max_width' => 1800,
                'min_height' => 500,
                'max_height' => 2000,
                'square_m_price' => 2555,
                self::FIRST_GLAZING_FACTOR => 1,
                self::SECOND_GLAZING_FACTOR => 1.1,
                self::THIRD_GLAZING_FACTOR => 1.3,
            ],
            self::THREE_PARTS_WINDOW => [
                'min_width' => 1300,
                'max_width' => 2500,
                'min_height' => 500,
                'max_height' => 2000,
                'square_m_price' => 2300,
                self::FIRST_GLAZING_FACTOR => 1,
                self::SECOND_GLAZING_FACTOR => 1.1,
                self::THIRD_GLAZING_FACTOR => 1.3,
            ],
            self::DOORS => [
                'min_width' => 500,
                'max_width' => 800,
                'min_height' => 1800,
                'max_height' => 2200,
                'square_m_price' => 3120,
                self::FIRST_GLAZING_FACTOR => 1,
                self::SECOND_GLAZING_FACTOR => 1.1,
                self::THIRD_GLAZING_FACTOR => 1.3,
            ],
        ];
    }
}
