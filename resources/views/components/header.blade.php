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
      <div class="burger" id="burger">
        <i class="ph ph-list" style="font-size: 32px"></i>
      </div>
      <div class="closeBurger" id="closeBurger">
        <i class="ph ph-x" style="font-size: 32px"></i>
      </div>
      <div onclick="window.location.href='{{ route('home.page') }}'">
        <x-picture-tag src="{{ asset('assets/LogoDark.svg') }}" alt="Logo" :lazy="true" class="Logo" />
        <x-picture-tag src="{{ asset('assets/MobileLogo.svg') }}" alt="mobLogo" class="mobileLogo" />
      </div>
    </div>
    <button class="buttonSelectOpen" id="buttonSelectOpen">
      Вироби <i class="ph ph-caret-down" style="font-size: 20px ;"></i>
    </button>
    <button class="buttonSelectClose" id="buttonSelectClose">
      Вироби <i class="ph ph-x" style="font-size: 20px ;"></i>
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

    <di class="headerBtns">
      @include("ui.secondaryBtn", [
      "content" => [
      "id" => "btnConnect",
      "text" => "Зв'язатися",
      "class" => "btnConnect",
      "modal" => "#contactModal"

      ]
  ])
@include("ui.secondaryBtn", [
    "content" => [
    "text" => "Підтримати",
    "class" => "btnSupport",
    "route" => "support.page"
    ]
])
@include("ui.primaryBtn", [
    "content" => [
    "id" => 'btnPreOrder',
    "icon" => "ph ph-backpack",
    "text" => "Передзамовлення",
    "class" => "btnPreOrder",
    "styles" => "font-size: 20px",
    "count" => 9
    ]
])   
</div>                    
</div>
</header>


