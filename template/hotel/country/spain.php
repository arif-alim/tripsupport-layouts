<?php $madridHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:3117735,%5C%22name%5C%22:%5C%22Madrid%5C%22,%5C%22secondaryName%5C%22:%5C%22Madrid,%20Spain%5C%22,%5C%22type%5C%22:0%7D%22,%22EntryDate%22:%229%20Apr%202022%22,%22ExitDate%22:%2212%20Apr%202022%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>
<?php $barcelonaHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:3128760,%5C%22name%5C%22:%5C%22Barcelona%5C%22,%5C%22secondaryName%5C%22:%5C%22Catalonia,%20Spain%5C%22,%5C%22type%5C%22:0%7D%22,%22EntryDate%22:%229%20Apr%202022%22,%22ExitDate%22:%2216%20Apr%202022%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>
<?php $valenciaHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:2509954,%5C%22name%5C%22:%5C%22Valencia%5C%22,%5C%22secondaryName%5C%22:%5C%22Valencia,%20Spain%5C%22,%5C%22type%5C%22:0%7D%22,%22EntryDate%22:%229%20Apr%202022%22,%22ExitDate%22:%2216%20Apr%202022%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>
<?php $sevilleHotelsURL = "#" ?>


<div class="mt-8 grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:grid-rows-3 gap-x-4">
  <!-- Card -->
  <a href="<?php echo $madridHotelsURL ?>" class="flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:row-span-3">
    <!-- Card Cover -->
    <div class="aspect-w-3 aspect-h-1 sm:aspect-w-2 sm:aspect-h-1 bg-gray-100">
      <img src="https://trip-support.s3.amazonaws.com/images/hotels/tabs/spain/madrid.jpg" alt="madrid" class="object-bototm object-cover" />
    </div>
    <!-- END Card Cover -->

    <!-- Card Body -->
    <div class="p-4 w-full">
      <p class="font-semibold text-xz mb-1 text-rose-600 mt-4">Spain</p>
      <h3 class="font-bold text-pblue-900 text-xl mb-3">Madrid</h3>
      <p class="tr-ellipsis-3 text-slate-800 text-tiny mb-3">
        Madrid, Spain's central capital, is a city of elegant boulevards and expansive, manicured parks such as the Buen Retiro. It’s renowned for its rich repositories of European art, including the Prado Museum’s works by Goya, Velázquez and other Spanish masters. The heart of old Hapsburg Madrid is the portico-lined Plaza Mayor, and nearby is the baroque Royal Palace and Armory, displaying historic weaponry.
      </p>
      <div class="line-clamp-1 mt-3 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Gran Via</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Museo del Parado</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">El Rastro Market</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">El Retiro Park</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Plaza Mayor</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Puerta de Alcala</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Puerta del Sol</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Templo de Debod</div>
      </div>
    </div>
    <!-- END Card Body -->


    <!-- Card Footer -->
    <div class="pt-4 pb-2 px-5 lg:px-6 w-full flex items-center">
      <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
          <img class="h-12" src="https://trip-support.s3.amazonaws.com/images/hotels/hilton.svg" alt="radisson hotel">
        </div>
        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
          <img class="h-12" src="https://trip-support.s3.amazonaws.com/images/hotels/radisson.svg" alt="hilton hotel">
        </div>
        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
          <img class="h-12" src="https://trip-support.s3.amazonaws.com/images/hotels/ritz-carlton.svg" alt="ritz-carlton hotel">
        </div>
        <div class="col-span-1 flex justify-center md:col-span-3 lg:col-span-1">
          <img class="h-12" src="https://trip-support.s3.amazonaws.com/images/hotels/shangri-la.svg" alt="shangri-la hotel icon">
        </div>
        <div class="col-span-2 flex justify-center md:col-span-3 lg:col-span-1">
          <img class="h-12" src="https://trip-support.s3.amazonaws.com/images/hotels/westin.svg" alt="westin hotel icon">
        </div>
      </div>
    </div>

    <!-- END Card -->
  </a>
  <!-- END Card -->
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $barcelonaHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/spain/barcelona.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Spain</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Barcelona</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Barcelona, the cosmopolitan capital of Spain’s Catalonia region, is known for its art and architecture. The fantastical Sagrada Família church and other modernist landmarks designed by Antoni Gaudí dot the city. Museu Picasso and Fundació Joan Miró feature modern art by their namesakes. City history museum MUHBA, includes several Roman archaeological sites.
      </p>
      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Sagrada Família</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Las Ramblas</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Magic Fountain of Montjuïc</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">La Pedrera</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Barcelona FC Museum</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $valenciaHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/spain/valencia.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Spain</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Valencia</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        The port city of Valencia lies on Spain’s southeastern coast, where the Turia River meets the Mediterranean Sea. It’s known for its City of Arts and Sciences, with futuristic structures including a planetarium, an oceanarium and an interactive museum. Valencia also has several beaches, including some within nearby Albufera Park, a wetlands reserve with a lake and walking trails.
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Ciutat de les Arts</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Las Fallas Festival</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Oceanogràfic de València</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Mercado Central</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $sevilleHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/spain/sevilla.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Spain</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Seville</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Seville is the capital and largest city of the Spanish autonomous community of Andalusia and the province of Seville. It is situated on the lower reaches of the River Guadalquivir, in the southwest of the Iberian Peninsula.
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Alcazar</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">La Giralda</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Plaza de España</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Plaza de Toros</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Torre del Oro</div>

      </div>
    </div>
  </a>
</div>

<style>
  .tr-ellipsis-4 {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: initial;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
  }

  .tr-ellipsis-3 {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: initial;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
  }

  .tr-ellipsis-2 {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: initial;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
  }
</style>