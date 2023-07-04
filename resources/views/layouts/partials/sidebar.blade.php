<aside id="default-sidebar" class="fixed top-0 left-0 w-72 h-screen" aria-label="Sidebar">
    <div class="h-full px-3 py-4 bg-gray-900">
       <ul class="space-y-2 font-medium">
          <li>
             <div class="block p-2">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ticket<span class="text-blue-500">App<span>.</span>
             </div>
          </li>
          <li>
             <a href="{{ route('beranda') }}" class="flex items-center p-2 rounded-lg transition duration-0 hover:duration-300 text-gray-400 hover:text-white ">
               <span class="material-icons-outlined">dashboard</span>
               <span class="ml-3">Beranda</span>
             </a>
          </li>
         <li>
            <a href="{{ route('entri') }}" class="flex items-center p-2 rounded-lg transition duration-0 text-gray-400 hover:duration-300 hover:text-white">
               <span class="material-icons-outlined">account_tree</span>                  
               <span class="flex-1 ml-3 text-left whitespace-nowrap">Entry Data & Pengolahan</span>
            </a>
         </li>
         <li>
            <a href="{{ route('check') }}" id="dropbtn2" class="flex items-center p-2 rounded-lg transition duration-0  hover:duration-300 text-gray-400 hover:text-white">
               <span class="material-icons-outlined">backup_table</span>                  
               <span class="flex-1 ml-3 text-left whitespace-nowrap">Check Ticket</span>
            </a>
         </li>
         <li>
            <a href="{{ route('chekin') }}" id="dropbtn2" class="flex items-center p-2 rounded-lg transition duration-0  hover:duration-300 text-gray-400 hover:text-white">
               <span class="material-icons-outlined">fact_check</span>                  
               <span class="flex-1 ml-3 text-left whitespace-nowrap">Check User checkin</span>
            </a>
         </li>
         <li>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
               <button type="submit" class="flex mt-[22rem] items-center p-2 rounded-lg transition duration-0 hover:duration-300 text-gray-400 hover:text-white ">
                  <span class="material-icons-outlined">logout</span>
                  <span class="ml-3">Logout</span>
               </button>
            </form>
         </li>
       </ul>
    </div>
 </aside>
 