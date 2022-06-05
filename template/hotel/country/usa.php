<?php $newyorkHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:5125771,%5C%22name%5C%22:%5C%22Manhattan%5C%22,%5C%22secondaryName%5C%22:%5C%22New%20York,%20United%20States%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-19%22,%22ExitDate%22:%222022-04-22%22%7D" ?>
<?php $losAngelesHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:5368361,%5C%22name%5C%22:%5C%22Los%20Angeles%5C%22,%5C%22secondaryName%5C%22:%5C%22California,%20United%20States%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-19%22,%22ExitDate%22:%222022-04-22%22%7D" ?>
<?php $miamiHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:4164138,%5C%22name%5C%22:%5C%22Miami%5C%22,%5C%22secondaryName%5C%22:%5C%22Florida,%20United%20States%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-19%22,%22ExitDate%22:%222022-04-22%22%7D" ?>
<?php $houstonHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:4699066,%5C%22name%5C%22:%5C%22Houston%5C%22,%5C%22secondaryName%5C%22:%5C%22Texas,%20United%20States%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-19%22,%22ExitDate%22:%222022-04-22%22%7D" ?>


<div class="mt-8 grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:grid-rows-3 gap-x-4">
  <!-- Card -->
  <a href="<?php echo $newyorkHotelsURL ?>" class="flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:row-span-3">
    <!-- Card Cover -->
    <div class="aspect-w-3 aspect-h-1 sm:aspect-w-2 sm:aspect-h-1 bg-gray-100">
      <img src="https://trip-support.s3.amazonaws.com/images/hotels/tabs/usa/newyork.jpg" alt="New York" class="object-center object-cover" />
    </div>
    <!-- END Card Cover -->

    <!-- Card Body -->
    <div class="p-4 w-full">
      <p class="font-semibold text-xz mb-1 text-rose-600 mt-4">New York</p>
      <h3 class="font-bold text-pblue-900 text-xl mb-3">Manhattan, New Yrok</h3>
      <p class="tr-ellipsis-3 text-slate-800 text-tiny mb-3">
        Manhattan is the most densely populated of New York City’s 5 boroughs. It's mostly made up of Manhattan Island, bounded by the Hudson, East and Harlem rivers. Among the world’s major commercial, financial and cultural centers, it’s the heart of “the Big Apple.” Its iconic sites include skyscrapers such as the Empire State Building, neon-lit Times Square and the theaters of Broadway.
      </p>
      <div class="line-clamp-1 mt-3 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Downtown Aquarium</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Vessel</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Morgan Library</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Grand Central Station</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Toronto Islands</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Brooklyn Bridge</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Time Square</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Central Park</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Empire State Building</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Statue of Liberty</div>
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
  <a href="<?php echo $losAngelesHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/usa/los-angeles.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">California</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Los Angeles</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Los Angeles is a sprawling Southern California city and the center of the nation’s film and television industry. Near its iconic Hollywood sign, studios such as Paramount Pictures, Universal and Warner Brothers offer behind-the-scenes tours. On Hollywood Boulevard, TCL Chinese Theatre displays celebrities’ hand- and footprints, the Walk of Fame honors thousands of luminaries and vendors sell maps to stars’ homes.
      </p>
      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Universal Studios Hollywood</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Disneyland Resort</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Hollywood</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Santa Monica</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Venice Beach</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">More</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $miamiHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/usa/miami.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Florida</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Miami</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Miami, officially the City of Miami, is a coastal metropolis located in Miami-Dade County in southeastern Florida. With a population of 442,241 as of the 2020 census, it is the second-most populous city in Florida, eleventh-most populous city in the Southeast, and 44th-most populous city in the United States.
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Old miami</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Underground City</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">F1 Circuit</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">miami Museum</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Skiing</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">miami Casino</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">More</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $houstonHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/usa/houston.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Texas</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Houston</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Houston is a large metropolis in Texas, extending to Galveston Bay. It’s closely linked with the Space Center Houston, the coastal visitor center at NASA’s astronaut training and flight control complex. The city’s relatively compact Downtown includes the Theater District, home to the renowned Houston Grand Opera, and the Historic District, with 19th-century architecture and upscale restaurants.
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Space Center</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Bayou Place</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Houston Zoo</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">The Galleria</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Kemah Boardwalk</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Downtown Aquarium</div>
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