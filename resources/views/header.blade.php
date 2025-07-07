@php
  $isOpen = false;
  $links = [
    ['title' => "Про нас", "anchor" => "#about"],
    ['title' => "Як ми працюємо", "anchor" => "#about"],
    ['title' => "Партнери", "anchor" => "#about"],
    ['title' => "Відгуки", "anchor" => "#about"],
  ];
@endphp

<header class="header">
  <div class="headerContent">
    <div class="headerBurgerContainer">
      @if($isOpen)
      <i class="ph ph-x" style="font-size: 32px" class="burger"></i>
    @else
      <i class="ph ph-list" style="font-size: 32px" class="burger"></i>
    @endif
      <x-picture-tag src="{{ asset('assets/LogoDark.svg') }}" alt="Logo" :lazy="false" class="Logo" />
    </div>

    <a href="{{ request()->fullUrlWithQuery(['menu' => 'open']) }}" class="buttonSelect">
      Вироби <i class="ph ph-caret-down"></i>
    </a>

    <nav>
      <ul>
        @foreach($links as $link)
      <li>
        <a href="{{ $link['anchor'] }}">{{ $link['title'] }}</a>
      </li>
    @endforeach
      </ul>
    </nav>

    <div class="headerBtns">
      @include("secondaryBtn", [
      "content" => [
      "text" => "Зв'язатися",
      "class" => "btnConnect",
      ]
  ])
      @include("secondaryBtn", [
      "content" => [
      "text" => "Підтримати",
      "class" => "btnSupport",
      ]
  ])

      @include("primaryBtn", [
      "content" => [
      "icon" => "ph ph-backpack",
      "text" => "Передзамовлення",
      "class" => "btnConnect",
      "styles" => "font-size: 20px",
      "count" => 9
      ]
  ])    </div>
  </div>

  <div>
    <x-header-menu :isOpen="$isOpen" />
  </div>
</header>
