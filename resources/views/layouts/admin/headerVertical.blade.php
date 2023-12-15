  <aside
      class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
      aria-label="Sidenav"
      id="drawer-navigation"
    >
      <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <ul class="space-y-6 mt-6">
          <li>
            <a
              href="#"
              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
          <ion-icon
            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"

          name="eye"></ion-icon>
              <span class="ml-3">Exemple</span>
            </a>
          </li>
          <li>
            <button
              type="button"
              class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100"
              aria-controls="dropdown-pages"
              data-collapse-toggle="dropdown-pages"
            >
             <ion-icon
            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"

          name="person"></ion-icon>
              <span class="flex-1 ml-3 text-left whitespace-nowrap"
                >Gestion des comptes</span
              >
              <ion-icon class="w-4 h-4" name="chevron-down"></ion-icon>

            </button>
            <ul id="dropdown-pages" class="hidden py-2 space-y-2">
              <li>
                <a
                  href="{{route('admin.ajoutetudiant')}}"
                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100"
                  >Gestion des comptes étudiants</a
                >
              </li>
              <li>
                <a
                  href="{{route('admin.ajoutprofesseur')}}"
                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100"
                  >Gestion des comptes enseignants</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100"
                  >Gestion des chefs de départements</a
                >
              </li>
            </ul>
          </li>


        </ul>

      </div>

    </aside>
