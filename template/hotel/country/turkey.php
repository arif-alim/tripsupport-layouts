<?php $istanbulHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:745044,%5C%22name%5C%22:%5C%22Istanbul%5C%22,%5C%22secondaryName%5C%22:%5C%22Istanbul,%20Turkey%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>
<?php $izmirHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:311046,%5C%22name%5C%22:%5C%22Izmir%5C%22,%5C%22secondaryName%5C%22:%5C%22Izmir,%20Turkey%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>
<?php $antalyaHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:323777,%5C%22name%5C%22:%5C%22Antalya%5C%22,%5C%22secondaryName%5C%22:%5C%22Antalya,%20Turkey%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>
<?php $ankaraHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:323786,%5C%22name%5C%22:%5C%22Ankara%5C%22,%5C%22secondaryName%5C%22:%5C%22Ankara,%20Turkey%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>


<div class="mt-8 grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:grid-rows-3 gap-x-4">
  <!-- Card -->
  <a href="<?php echo $istanbulHotelsURL ?>" class="flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:row-span-3">
    <!-- Card Cover -->
    <div class="aspect-w-3 aspect-h-1 sm:aspect-w-2 sm:aspect-h-1 bg-gray-100">
      <img src="https://trip-support.s3.amazonaws.com/images/hotels/tabs/turkey/istanbul.jpg" alt="madrid" class="object-bototm object-cover" />
    </div>
    <!-- END Card Cover -->

    <!-- Card Body -->
    <div class="p-4 w-full">
      <p class="font-semibold text-xz mb-1 text-rose-600 m-4">Turkey</p>
      <h3 class="font-bold text-pblue-900 text-xl mb-3">Istanbul</h3>
      <p class="tr-ellipsis-3 text-slate-800 text-tiny mb-3">
        Istanbul is a major city in Turkey that straddles Europe and Asia across the Bosphorus Strait. Its Old City reflects cultural influences of the many empires that once ruled here. In the Sultanahmet district, the open-air, Roman-era Hippodrome was for centuries the site of chariot races, and Egyptian obelisks also remain. The iconic Byzantine Hagia Sophia features a soaring 6th-century dome and rare Christian mosaics.
      </p>
      <div class="line-clamp-1 mt-3 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Hagia Sophia Grand Mosque</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Topkapi Palace Museum</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Basilica Cistern</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Galata Tower</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Sultanahmet Square</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Grand Bazaar</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Princes’ Islands</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Istiklal Street</div>
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
  <a href="<?php echo $izmirHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/turkey/izmir.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Turkey</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Izmir</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Izmir is a city on Turkey’s Aegean coast. Known as Smyrna in antiquity, it was founded by the Greeks, taken over by the Romans and rebuilt by Alexander the Great before becoming part of the Ottoman Empire in the 15th century. Today, its expansive archaeological sites include the Roman Agora of Smyrna, now an open-air museum. The hilltop Kadifekale, or Velvet Castle, built during Alexander’s reign, overlooks the city.
      </p>
      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Agora</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Clock Tower</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Pergamon</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Sardis</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Bergama Asklepion</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Adaland Aquapark</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $antalyaHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/turkey/antalya.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Turkey</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Antalya</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Antalya is a Turkish resort city with a yacht-filled Old Harbor and beaches flanked by large hotels. It's a gateway to Turkey's southern Mediterranean region, known as the Turquoise Coast for its blue waters. Remnants remain from Antalya's time as a major Roman port. These include Hadrian’s Gate, built to honor the Roman emperor’s visit in 130 A.D and 2nd-century Hidirlik Tower, with harbor views.
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Kaleiçi</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Düden Waterfalls</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Kurşunlu Waterfall</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Perge</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Hadrian’s Gate</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Konyaaltı Beach</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $ankaraHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/turkey/ankara.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">Turkey</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Ankara</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Ankara, Turkey’s cosmopolitan capital, sits in the country’s central Anatolia region. It’s a center for the performing arts, home to the State Opera and Ballet, the Presidential Symphony Orchestra and several national theater companies. Overlooking the city is Anitkabir, the enormous hilltop mausoleum of Kemal Atatürk, modern Turkey’s first president, who declared Ankara the capital in 1923.
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Ankara Castle</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Mavi Gol Lake</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Ancient Roma Bath</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Harikalar Diyari Park</div>

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