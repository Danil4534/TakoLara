@php
  $isOpen = false;
  $links = [
    ['title' => "Про нас", "anchor" => "#about"],
    ['title' => "Як ми працюємо", "anchor" => "#about"],
    ['title' => "Партнери", "anchor" => "#partners"],
    ['title' => "Відгуки", "anchor" => "#responses"],
  ];
@endphp

<header class="header">
  <div class="headerContent">
    <div class="headerBurgerContainer">
      @if($isOpen)
      <div class="burger">
      <i class="ph ph-x" style="font-size: 32px"></i>
      </div>
    @else
      <div class="burger">

      <i class="ph ph-list" style="font-size: 32px"></i>
      </div>
    @endif
      <x-picture-tag src="{{ asset('assets/LogoDark.svg') }}" alt="Logo" :lazy="true" class="Logo" />
      <x-picture-tag src="{{ asset('assets/MobileLogo.svg') }}" alt="mobLogo" class="mobileLogo" />

    </div>

    <button class="buttonSelect">
      Вироби <i class="ph ph-caret-down" style="font-size: 20px ;"></i>
    </button>

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
      @include("ui.secondaryBtn", [
      "content" => [
      "text" => "Зв'язатися",
      "class" => "btnConnect",
      "modal" => "#contactModal"
      ]
  ])
      @include("ui.secondaryBtn", [
      "content" => [
      "text" => "Підтримати",
      "class" => "btnSupport",

      ]
  ])

      @include("ui.primaryBtn", [
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
