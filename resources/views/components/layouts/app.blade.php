<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta10
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ $title ?? 'Inventiro' }}</title>
    
    <x-partials.styles></x-partials.styles>

  </head>
  <body class="layout-fluid">
    <div class="page">
      <x-layouts.sidebar>
        

      </x-layouts.sidebar>

      <x-layouts.header></x-layouts.header>

      <div class="page-wrapper">
        
        <x-layouts.pageHeader>
            <x-slot:pretitle>
            {{ $pretitle }}
            </x-slot:pretitle>

            <x-slot:pageTitle>
                {{ $pageTitle }}
            </x-slot:pageTitle>
        </x-layouts.pageHeader>

        {{ $slot }}
        
        <x-layouts.footer></x-layouts.footer>

      </div>
    </div>
    
    {{ $modals }}

    <x-partials.scripts>

    </x-partials.scripts>

    @stack('scripts')
  </body>
</html>