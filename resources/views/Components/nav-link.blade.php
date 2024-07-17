<!-- In PHP, props is used to pass data from a parent component to a child component. -->
<!-- aria-current is used to indicate the current page in the navigation. -->
<!-- $attributes is a special variable that contains all the HTML attributes passed to the component. -->
<!-- The variable within the curly braces {{ $slot }} is called a slot. Slot is a special variable that contains the content passed to the component. -->
@props(['active' => false])

<a class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? "page" : "false" }}"
    {{ $attributes }}
>{{ $slot }}</a>
