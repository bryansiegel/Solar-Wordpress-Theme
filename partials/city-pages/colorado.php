<?php $colorado_cities = array(

    "Aguilar",
    "Akron",
    "Alamosa",
    "Alma",
    "Antonito",
    "Arriba",
    "Arvada",
    "Aspen",
    "Ault",
    "Aurora",
    "Avon",
    "Basalt",
    "Bayfield",
    "Bennett",
    "Berthoud",
    "Bethune",
    "Black Hawk",
    "Blanca",
    "Blue River",
    "Bonanza",
    "Boone",
    "Boulder",
    "Bow Mar",
    "Branson",
    "Breckenridge",
    "Brighton",
    "Brookside",
    "Broomfield",
    "Brush",
    "Buena Vista",
    "Burlington",
    "Calhan",
    "Campo",
    "Canon City",
    "Carbondale",
    "Castle Pines",
    "Castle Rock",
    "Cedaredge",
    "Centennial",
    "Center",
    "Central City",
    "Cheraw",
    "Cherry Hills Village",
    "Cheyenne Wells",
    "Coal Creek",
    "Cokedale",
    "Collbran",
    "Colorado Springs",
    "Columbine Valley",
    "Commerce City",
    "Cortez",
    "Craig",
    "Crawford",
    "Creede",
    "Crested Butte",
    "Crestone",
    "Cripple Creek",
    "Crook",
    "Crowley",
    "Dacono",
    "De Beque",
    "Deer Trail",
    "Del Norte",
    "Delta",
    "Denver",
    "Dillon",
    "Dinosaur",
    "Dolores",
    "Dove Creek",
    "Durango",
    "Eads",
    "Eagle",
    "Eaton",
    "Eckley",
    "Edgewater",
    "Elizabeth",
    "Empire",
    "Englewood",
    "Erie",
    "Estes Park",
    "Evans",
    "Fairplay",
    "Federal Heights",
    "Firestone",
    "Flagler",
    "Fleming",
    "Florence",
    "Fort Collins",
    "Fort Lupton",
    "Fort Morgan",
    "Fountain",
    "Fowler",
    "Foxfield",
    "Fraser",
    "Frederick",
    "Frisco",
    "Fruita",
    "Garden City",
    "Genoa",
    "Georgetown",
    "Gilcrest",
    "Glendale",
    "Glenwood Springs",
    "Golden",
    "Granada",
    "Granby",
    "Grand Junction",
    "Grand Lake",
    "Greeley",
    "Green Mountain Falls",
    "Greenwood Village",
    "Grover",
    "Gunnison",
    "Gypsum",
    "Hartman",
    "Haswell",
    "Haxtun",
    "Hayden",
    "Hillrose",
    "Holly",
    "Holyoke",
    "Hooper",
    "Hot Sulphur Springs",
    "Hotchkiss",
    "Hudson",
    "Hugo",
    "Idaho Springs",
    "Ignacio",
    "Iliff",
    "Jamestown",
    "Johnstown",
    "Julesburg",
    "Keenesburg",
    "Kersey",
    "Kim",
    "Kiowa",
    "Kit Carson",
    "Kremmling",
    "La Jara",
    "La Junta",
    "La Veta",
    "Lafayette",
    "Lake City",
    "Lakeside",
    "Lakewood",
    "Lamar",
    "Larkspur",
    "Las Animas",
    "LaSalle",
    "Leadville",
    "Limon",
    "Littleton",
    "Lochbuie",
    "Log Lane Village",
    "Lone Tree",
    "Longmont",
    "Louisville",
    "Loveland",
    "Lyons",
    "Manassa",
    "Mancos",
    "Manitou Springs",
    "Manzanola",
    "Marble",
    "Mead",
    "Meeker",
    "Merino",
    "Milliken",
    "Minturn",
    "Moffat",
    "Monte Vista",
    "Montezuma",
    "Montrose",
    "Monument",
    "Morrison",
    "Mount Crested Butte",
    "Mountain View",
    "Mountain Village",
    "Naturita",
    "Nederland",
    "New Castle",
    "Northglenn",
    "Norwood",
    "Nucla",
    "Nunn",
    "Oak Creek",
    "Olathe",
    "Olney Springs",
    "Ophir",
    "Orchard City",
    "Ordway",
    "Otis",
    "Ouray",
    "Ovid",
    "Pagosa Springs",
    "Palisade",
    "Palmer Lake",
    "Paoli",
    "Paonia",
    "Parachute",
    "Parker",
    "Peetz",
    "Pierce",
    "Pitkin",
    "Platteville",
    "Poncha Springs",
    "Pritchett",
    "Pueblo",
    "Ramah",
    "Rangely",
    "Raymer",
    "Red Cliff",
    "Rico",
    "Ridgway",
    "Rifle",
    "Rockvale",
    "Rocky Ford",
    "Romeo",
    "Rye",
    "Saguache",
    "Salida",
    "San Luis",
    "Sanford",
    "Sawpit",
    "Sedgwick",
    "Seibert",
    "Severance",
    "Sheridan",
    "Sheridan Lake",
    "Silt",
    "Silver Cliff",
    "Silver Plume",
    "Silverthorne",
    "Silverton",
    "Simla",
    "Snowmass Village",
    "South Fork",
    "Springfield",
    "Starkville",
    "Steamboat Springs",
    "Sterling",
    "Stratton",
    "Sugar City",
    "Superior",
    "Swink",
    "Telluride",
    "Thornton",
    "Timnath",
    "Trinidad",
    "Two Buttes",
    "Vail",
    "Victor",
    "Vilas",
    "Vona",
    "Walden",
    "Walsenburg",
    "Walsh",
    "Ward",
    "Wellington",
    "Westcliffe",
    "Westminster",
    "Wheat Ridge",
    "Wiggins",
    "Wiley",
    "Williamsburg",
    "Windsor",
    "Winter Park",
    "Woodland Park",
    "Wray",
    "Yampa",
    "Yuma",
); ?>

<div class="p-5 m-5">
    <ul class="list-of-cities">
        <h2 class="text-center pb-5">Colorado Locations</h2>

        <?php foreach($colorado_cities as $city) : ?>

            <!-- <li><?php //echo $city ?></li> -->
            <li><a href="/colorado-<?php echo strtolower(str_replace(" ", "-", $city)); ?>-solar-installation/"
                title="<?php echo $city ?> Solar Installation"><?php echo $city ?></a></li>

            <?php endforeach; ?>
        </ul>
    </div>