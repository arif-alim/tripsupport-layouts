<?php $torontoHotelsURL = "https://secure.tripsupport.ca/flight/roundtrip;tripType=roundtrip;origin=YYZ;destination=YVR;departDate=6%20May%202022;returnDate=13%20May%202022;adult=1;child=0;infant=0;class=Economy;IsFlexiSearch=false;multiOrigin=;multiDestination=;multidate=" ?>
<?php $vancouverHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:6173331,%5C%22name%5C%22:%5C%22Vancouver%5C%22,%5C%22secondaryName%5C%22:%5C%22British%20Columbia,%20Canada%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-16%22,%22ExitDate%22:%222022-04-19%22%7D" ?>
<?php $montrealHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:6077243,%5C%22name%5C%22:%5C%22Montreal%5C%22,%5C%22secondaryName%5C%22:%5C%22Quebec,%20Canada%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-16%22,%22ExitDate%22:%222022-04-19%22%7D" ?>
<?php $calgaryHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:5913490,%5C%22name%5C%22:%5C%22Calgary%5C%22,%5C%22secondaryName%5C%22:%5C%22Alberta,%20Canada%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-16%22,%22ExitDate%22:%222022-04-19%22%7D" ?>


<div class="mt-8 grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:grid-rows-3 gap-x-4">
  <!-- Card -->
  <a href="<?php echo $torontoHotelsURL ?>" class="flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:row-span-3">
    <!-- Card Cover -->
    <div class="aspect-w-3 aspect-h-1 sm:aspect-w-2 sm:aspect-h-1 bg-gray-100">
      <img src="https://trip-support.s3.amazonaws.com/images/hotels/tabs/canada/toronto-downtown.jpg" alt="City of Toronto" class="object-center object-cover" />
    </div>
    <!-- END Card Cover -->

    <!-- Card Body -->
    <div class="p-4 w-full">
      <p class="font-semibold text-xz mb-1 text-rose-600 mt-4">Ontario</p>
      <h3 class="font-bold text-pblue-900 text-xl mb-3">Downtown Toronto</h3>
      <p class="tr-ellipsis-3 text-slate-800 text-tiny mb-3">
        Downtown Toronto is a buzzing area filled with skyscrapers, restaurants, nightlife, and an eclectic mix of neighbourhoods. It’s also home to iconic attractions like the CN Tower, St. Lawrence Market, and the Royal Ontario Museum, with exhibits on natural history. Bloor Street is an upscale shopping area, and the Eaton Centre is a huge, multistory mall. On the lake, the Harbourfront area has parks and cultural venues.
      </p>
      <div class="line-clamp-1 mt-3 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Royal Ontario Museum</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Distillery District</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Art & Gallery</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Ontaior Science Centre</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Toronto Islands</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Ripley's Aquarium</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">CN Tower</div>
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
  <a href="<?php echo $vancouverHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/canada/vancouver.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">British Columbia</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Vancouver</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Vancouver, a bustling west coast seaport in British Columbia, is among Canada’s densest, most ethnically diverse cities. A popular filming location, it’s surrounded by mountains, and also has thriving art, theatre and music scenes. Vancouver Art Gallery is known for its works by regional artists, while the Museum of Anthropology houses preeminent First Nations collections.
      </p>
      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Suspension Bridge</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Ski Grouse Mountain </div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Explore Gastown</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Whale Watching</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Skiing</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">More</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $montrealHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/canada/montreal.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Quebec</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Montreal</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Montréal is the largest city in Canada's Québec province. It’s set on an island in the Saint Lawrence River and named after Mt. Royal, the triple-peaked hill at its heart. Its boroughs, many of which were once independent cities, include neighbourhoods ranging from cobblestoned, French colonial Vieux-Montréal – with the Gothic Revival Notre-Dame Basilica at its centre – to bohemian Plateau.
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Old Montreal</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Underground City</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">F1 Circuit</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Montreal Museum</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Skiing</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Montreal Casino</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">More</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $calgaryHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/canada/alberta.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Alberta</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Calgary</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Calgary, a cosmopolitan Alberta city with numerous skyscrapers, owes its rapid growth to its status as the centre of Canada’s oil industry. However, it’s still steeped in the western culture that earned it the nickname “Cowtown,” evident in the Calgary Stampede, its massive July rodeo and festival that grew out of the farming exhibitions once presented here
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Banff</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Lake Louis</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Olympic Park</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Dinosaur Park</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Heritage Park</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Calgary Tower</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Glenbow Museum</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">More</div>
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