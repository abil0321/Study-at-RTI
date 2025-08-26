<?php

namespace App\View\Components\Perusahaan;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Card extends Component
{
    // TODO:  1 cara yang ini juga boleh untuk inisiasi constructor props
    // public $title;
    // public $image;
    // public $releasedate;
    // public $index;
    // /**
    //  * Create a new component instance.
    //  */
    // public function __construct(
    //     $title,
    //     $image,
    //     $releasedate,
    //     $index,
    // ) {
    //     $this->title = $title;
    //     $this->image = $image;
    //     $this->releasedate = $releasedate;
    //     $this->index = $index;
    // }

    // TODO:  2 cara yang lebih modern untuk inisiasi constructor props
    public function __construct(
        // memanggil property dari props yang akan digunakan
        public string $title,
        public string $image,
        public string $releasedate,
        public int $index,
    ) {
        // $this->title = Str::upper($title);
        // $this->releasedate = Carbon::parse($releasedate)->format('M d, Y');
        $this->title = $title;
        $this->releasedate = $this->getReleasedate();
        $this->index = $index;
        $this->image = $image;

        if ($this->isValid()) {
            $this->title = Str::upper($title);
            // $this->releasedate = Carbon::parse($releasedate)->format('M d, Y');
        }
    }

    /**
     * Checks if the component is valid.
     *
     * A component is valid if it has a title, image, and release date.
     *
     * @return bool
     */
    private function isValid()
    {
        return $this->title && $this->releasedate;
    }

    public function getImage(): string
    {
        if ($this->image) {
            return $this->image;
        }
        return 'https://placehold.co/300x450';
    }

    private function getReleasedate()
    {
        if ($this->releasedate >= Carbon::now()) {
            return 'Coming soon in ' . Carbon::parse($this->releasedate)->format('M d, Y');
        }
        return 'Released: ' . Carbon::parse($this->releasedate)->format('M d, Y');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // testing method isValid untuk custom validation card
        if (!$this->isValid()) {
            return '';
        }
        return view('components.perusahaan.card');
    }
}
