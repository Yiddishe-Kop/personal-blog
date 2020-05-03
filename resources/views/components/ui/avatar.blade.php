<div x-data='{
    user: {{ auth()->user() ?: "false" }},
    open: false,
    position: "{{ $position ?? "left" }}", dropdownItems: [ [ { url: "/dashboard" , label: "Profile" , iconPath:
  `<path fill-rule="evenodd"
  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
  clip-rule="evenodd">
  </path>`
  },
  {
  url: "/canvas",
  label: "Canvas",
  iconPath: `<path fill-rule="evenodd"
    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
    clip-rule="evenodd"></path>`
  }
  ],
  [
  {
  url: "/logout",
  label: "Logout",
  iconViewBox: "0 0 24 24",
  onClick: `event.preventDefault(); document.getElementById("logout-form").submit();`,
  iconPath: `<path
    d="M11 4h3a1 1 0 0 1 1 1v3a1 1 0 0 1-2 0V6h-2v12h2v-2a1 1 0 0 1 2 0v3a1 1 0 0 1-1 1h-3v1a1 1 0 0 1-1.27.96l-6.98-2A1 1 0 0 1 2 19V5a1 1 0 0 1 .75-.97l6.98-2A1 1 0 0 1 11 3v1z">
  </path>
  <path class="secondary"
    d="M18.59 11l-1.3-1.3c-.94-.94.47-2.35 1.42-1.4l3 3a1 1 0 0 1 0 1.4l-3 3c-.95.95-2.36-.46-1.42-1.4l1.3-1.3H14a1 1 0 0 1 0-2h4.59z">
  </path>`
  }
  ]
  ]
  }' @click.away="open = false" @keyup.escape.window="open = false" {{ $attributes->merge(['class' => 'relative']) }}>
  <template x-if="!!user">
    <button @click="open = true"
      class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:shadow-outline">
      <img class="h-10 w-10 rounded-full text-cool-gray-200 shadow-solid" :src="user.avatar" :alt="user.name" />
    </button>

    <div x-show.transition.duration.500ms="open" class="origin-top-right absolute mt-2 shadow-lg z-50"
      :class="[position == 'right' ? 'right-0' : 'left-0']">

      <div class="text-gray-700 rounded-md bg-white shadow-xs">

        <div class="text-gray-700 rounded-t-md bg-white shadow-xs overflow-hidden">
          <div class="px-4 py-2 border-b border-teal-200 bg-teal-100 text-teal-600">
            <p class="text-sm leading-5 font-semibold text-teal-900" x-text="user.name"></p>
            <p class="text-sm leading-5 truncate" x-text="user.email"></p>
          </div>
        </div>

        <template x-for="(group, i) in dropdownItems" :key="i">
          <div class="py-1 border-gray-200" :class="{'border-b' : i < group.length - 1}">
            <template x-for="(link, j) in group" :key="j">
              <a :href="link.url" :onclick="link.onClick"
                class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                <svg class="menu-icon mr-1 h-5 w-5 text-gray-500 group-hover:text-gray-600 group-focus:text-gray-600"
                  fill="currentColor" :viewBox="link.iconViewBox || '0 0 20 20'" x-html="link.iconPath"></svg>
                <span x-text="link.label"></span>
              </a>
            </template>
          </div>
        </template>

      </div>
    </div>
  </template>
</div>
