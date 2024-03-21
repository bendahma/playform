<div class="flex items-center justify-start space-x-3">

    @isset ( $viewUser)
        <a href="{{ $viewUser}}"  data-tooltip-target="tooltip-profile">
            <svg id="SvgjsSvg1011" width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1012"></defs><g id="SvgjsG1013"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="18" height="18"><path fill="#000000" fill-rule="evenodd" d="M134 2009c-2.217 0-4.019-1.794-4.019-4s1.802-4 4.019-4 4.019 1.794 4.019 4-1.802 4-4.019 4m3.776.673a5.978 5.978 0 0 0 2.182-5.603c-.397-2.623-2.589-4.722-5.236-5.028-3.652-.423-6.75 2.407-6.75 5.958 0 1.89.88 3.574 2.252 4.673-3.372 1.261-5.834 4.222-6.22 8.218a1.012 1.012 0 0 0 1.004 1.109.99.99 0 0 0 .993-.891c.403-4.463 3.836-7.109 7.999-7.109s7.596 2.646 7.999 7.109a.99.99 0 0 0 .993.891c.596 0 1.06-.518 1.003-1.109-.385-3.996-2.847-6.957-6.22-8.218" transform="translate(-124 -1999)" class="color000 svgShape"></path></svg></g></svg>
        </a>

        <div id="tooltip-profile" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
             Profile
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>


    @endif

    @isset ( $editUser)
        <a href="{{ $editUser}}" data-tooltip-target="tooltip-edit">
            <svg id="SvgjsSvg1034" width="20" height="20" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1035"></defs><g id="SvgjsG1036"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20"><path d="M8 9A4 4 0 104 5 4.00427 4.00427 0 008 9zM8 2A3 3 0 115 5 3.00328 3.00328 0 018 2zM4.05078 11.53369A12.41449 12.41449 0 018 11c.4679 0 .9057.02045 1.32745.05145l.91431-.9143A17.42136 17.42136 0 008 10a13.3773 13.3773 0 00-4.27344.58789A4.10427 4.10427 0 001 14.5a.49971.49971 0 00.5.5H7V14H2.03809A3.07683 3.07683 0 014.05078 11.53369zM13.885 13.73608c.02179.08973.06274.17157.0769.26392h-.34082l-1 1H14.5a.49971.49971 0 00.5-.5 4.23232 4.23232 0 00-.31067-1.56824zM15.85352 9.64648l-1.5-1.5a.49983.49983 0 00-.707 0l-5.5 5.5A.49965.49965 0 008 14v1.5a.49971.49971 0 00.5.5H10a.49965.49965 0 00.35352-.14648l5.5-5.5A.49983.49983 0 0015.85352 9.64648zM9.793 15H9v-.793l3.5-3.5.793.793zM14 10.793L13.207 10 14 9.207l.793.793z" data-name="edit user settings" fill="#000000" class="color000 svgShape"></path></svg></g></svg>
        </a>
        <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Edit
           <div class="tooltip-arrow" data-popper-arrow></div>
       </div>
    @endif

    @isset ( $disableUser)
        <form action="{{ $disableUser}}" class="d-inline" method="POST" x-data @submit.prevent="if (confirm('Are you sure you want to delete this user?')) $el.submit()"  >
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-link" data-tooltip-target="tooltip-disable">
                <svg id="SvgjsSvg1067" width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1068"></defs><g id="SvgjsG1069"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="18" height="18"><path d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2ZM4 16a11.89 11.89 0 0 1 2.85-7.74l16.89 16.89A12 12 0 0 1 4 16Zm21.15 7.74L8.26 6.85a12 12 0 0 1 16.89 16.89Z" data-name="Layer 51" fill="#ff0000" class="color000 svgShape"></path></svg></g></svg>
            </button>
            <div id="tooltip-disable" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Disable account
               <div class="tooltip-arrow" data-popper-arrow></div>
           </div>
        </form>
    @endif

    @isset ( $deleteUser)
        <form action="{{ $deleteUser}}" class="d-inline" method="POST" x-data @submit.prevent="if (confirm('Are you sure you want to delete this user?')) $el.submit()"  >
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-link" data-tooltip-target="tooltip-delete">

<svg id="SvgjsSvg1017" width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1018"></defs><g id="SvgjsG1019"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 22" width="18" height="18"><path fill="none" fill-rule="evenodd" stroke="#920000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h18M17 5v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5m3 0V3a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M8 10v6M12 10v6" class="colorStroke000 svgStroke"></path></svg></g></svg>
            </button>
            <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Delete account
               <div class="tooltip-arrow" data-popper-arrow></div>
           </div>
        </form>
    @endif

</div>
