<?php $parisHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:2988507,%5C%22name%5C%22:%5C%22Paris%5C%22,%5C%22secondaryName%5C%22:%5C%22Ile-de-France,%20France%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>
<?php $marseilleHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:2995469,%5C%22name%5C%22:%5C%22Marseille%5C%22,%5C%22secondaryName%5C%22:%5C%22Provence-Alpes-Cote%20d'Azur,%20France%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>
<?php $lyonHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:2996944,%5C%22name%5C%22:%5C%22Lyon%5C%22,%5C%22secondaryName%5C%22:%5C%22Auvergne-Rhone-Alpes,%20France%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>
<?php $toulouseHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:2972315,%5C%22name%5C%22:%5C%22Toulouse%5C%22,%5C%22secondaryName%5C%22:%5C%22Occitanie,%20France%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D%7D" ?>


<div class="mt-8 grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:grid-rows-3 gap-x-4">
  <!-- Card -->
  <a href="<?php echo $parisHotelsURL ?>" class="flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:row-span-3">
    <!-- Card Cover -->
    <div class="aspect-w-3 aspect-h-1 sm:aspect-w-2 sm:aspect-h-1 bg-gray-100">
      <img src="https://trip-support.s3.amazonaws.com/images/hotels/tabs/france/paris.jpg" alt="City of Paris" class="object-bototm object-cover" />
    </div>
    <!-- END Card Cover -->

    <!-- Card Body -->
    <div class="p-4 w-full">
      <p class="font-semibold text-xz mb-1 text-rose-600 mt-4">France</p>
      <h3 class="font-bold text-pblue-900 text-xl mb-3">Paris</h3>
      <p class="tr-ellipsis-3 text-slate-800 text-tiny mb-3">
        Also known as the Latin Quarter, the 5th arrondissement is home to the Sorbonne university and student-filled cafes. It's also known for its bookshops, including the famed Shakespeare & Company. Family-friendly attractions include the Jardin des Plantes botanical gardens and the National Museum of Natural History. The stately Panthéon building holds the remains of notables like Voltaire and Marie Curie.
      </p>
      <div class="line-clamp-1 mt-3 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Eiffel Tower</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Disneyland® Paris</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Moulin Rouge</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Paris Catacombs</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Palace of Versailles</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">River Seine</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">River Seine</div>
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
  <a href="<?php echo $marseilleHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/france/marseille.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">France</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Marseille</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Marseille, a port city in southern France, has been a crossroads of immigration and trade since its founding by the Greeks circa 600 B.C. At its heart is the Vieux-Port (Old Port), where fishmongers sell their catch along the boat-lined quay. Basilique Notre-Dame-de-la-Garde is a Romanesque-Byzantine church. Modern landmarks include Le Corbusier’s influential Cité Radieuse complex and Zaha Hadid’s CMA CGM Tower.
      </p>
      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Abbaye</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Vieux Port</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Colorful Streets of Le Panier</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">MuCEM</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Château d'If</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $lyonHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/france/lyon.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">France</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Lyon</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Lyon, the capital city in France’s Auvergne-Rhône-Alpes region, sits at the junction of the Rhône and Saône rivers. Its center reflects 2,000 years of history from the Roman Amphithéâtre des Trois Gaules, medieval and Renaissance architecture in Vieux (Old) Lyon, to the modern Confluence district on Presqu'île peninsula. Traboules, covered passageways between buildings, connect Vieux Lyon and La Croix-Rousse hill.
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Musée des Beaux Arts</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Musée de la Civilisation Gallo-Romaine</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Colline de la Croix-Rousse</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Presqu'ile District</div>
      </div>
    </div>
  </a>
  <!-- Toronto Luxury hotels -->
  <a href="<?php echo $toulouseHotelsURL ?>" class="tr-each-feature-vacation-container-1 flex flex-col rounded-lg shadow-sm border bg-white overflow-hidden sm:flex-row sm:row-span-1">
    <div class="h-60 sm:h-auto sm:w-[40%] bg-cover bg-center" style="background-image: url(https://trip-support.s3.amazonaws.com/images/hotels/tabs/france/toulouse.jpg);"></div>
    <div class="p-4 grow w-full sm:w-[60%]">
      <p class="font-semibold text-xz mb-1 text-rose-600">France</p>
      <h3 class="tr-ellipsis-2 font-bold text-pblue-900 text-lg mb-2">Toulouse</h3>
      <p class="text-slate-800 text-sm tr-ellipsis-2">
        Toulouse, capital of France’s southern Occitanie region, is bisected by the Garonne River and sits near the Spanish border. It’s known as La Ville Rose (‘The Pink City’) due to the terra-cotta bricks used in many of its buildings. Its 17th-century Canal du Midi links the Garonne to the Mediterranean Sea, and can be traveled by boat, bike or on foot.
      </p>

      <div class="line-clamp-2 mt-1 space-y-1">
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Basilique Saint-Sernin</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Couvent des Jacobins</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Place du Capitole</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Musée des Augustins</div>
        <div class="font-medium inline-flex px-2 py-1 leading-4 text-xs rounded-full text-gray-600 bg-gray-100">Cathédrale Saint-Etienne</div>

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