<section id="ut-graph">
    <p><a class="solar_pricing" name="solar_ppa"></a></p>
    <div class="d-flex justify-content-center">
        <div class="m-5 width-50 text-center">  
            <?php 
            $city_name = get_field("city_name");
            $content = array();
            $content[] = "<h2>$city_name Solar Purchase Agreement (PPA)</h2>
            <p>A solar Power Purchase Agreement (PPA) is a contract to buy $city_name solar power based on a set rate for the electricity the solar system produces. With a Power Purchase Agreement, a Sungevity finance partner owns, installs, and maintains the (city name) solar system on your roof -- just like a solar lease. Unlike a solar lease, you pay for the solar power you produce rather than the panels themselves.</p>";
            $content[] = "<h2>What Are the Benefits of a $city_name Solar Purchase Agreement (PPA)?</h2>
            <p>Set Rate for $city_name electricity based upon what your solar energy system produces.
            A Sungevity finance partner owns, installs and maintains your $city_name solar energy system.
            You pay for the solar power your $city_name system produces rather than the solar panels themselves.</p>";
            $content[] = "<h2>Why You Should Consider a Solar Purchase Agreement (PPA) in $city_name</h2>
            <p>A solar power purchase agreement (PPA) is a financial agreement where we help arrange for a solar energy system for a homeowner in (city name) at little to no cost. If you have any questions about a solar power purchase agreement in $city_name speak to one of our solar experts today!</p>";

            echo $content[rand(0, count($content)-1)];

            ?>
            <div class="text-center">
                <a class="btn btn-orange"
                href="https://sungevity.com/financing-options/?utm_content=city_page_solar_ppa#solar_ppa"
                title="Solar PPA"><i class="fa fa-credit-card" aria-hidden="true"></i>
            &nbsp;EXPLORE A SOLAR PPA</a>
        </div>
    </div>
</div>
</section>