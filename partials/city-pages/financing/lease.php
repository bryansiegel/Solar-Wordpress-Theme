<section style="background-color:lightgrey;">
    <p><a class="solar_pricing" name="lease_solar"></a></p>
    <div class="d-flex justify-content-center">
        <div class="m-5 width-50 text-center">                
            <?php 
            $city_name = get_field("city_name");
            $content = array();
            $content[] = "<h2>Lease a $city_name Solar Energy System</h2>
            <p>Many $city_name homeowners prefer to lease their solar energy system. The main difference between financing and leasing a solar system is that when you lease is that you don't own them and the lease provider will maintain them for you. We will connect you with a $city_name solar lease privider.</p>";
            $content[] = " <h2>What Are The Advantages of Leasing a $city_name Solar System?</h2>
            <p>Leasing a solar energy system in $city_name is an excellent option. What are the benefits of leasing a solar energy system?</p>
            <p style='text-align:left;font-weight:bold;'>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Minimal upfront cost -- in some cases, nothing at all -- and an affordable monthly amount to the lease provider.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Custom $city_name solar design so the total of your lease payment plus remaining power bill is less in total than your previous electric bill.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> System performance is guaranteed for 20 years. If your $city_name system produces less than we estimate, we’ll pay the difference.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> There’s no need to feel tied down, either. If you sell your $city_name home, Sungevity will help transfer the solar lease to the new homeowner.
            </p>
            ";
            $content[] = "<h2>Benefits of a $city_name Solar Lease</h2>
            <p>The benefit of a $city_name solar lease is that you don't have to pay the high upfront cost of a solar energy system. You will pay a fixed monthly amount your $city_name solar panels produce.</p>
            ";
            $content[] = "<h2>Advantages of Leasing a $city_name Home Solar System</h2>
            <p>If you don't want to buy your panels but still want the advantages that solar panels for your $city_name home can
            bring, consider leasing the solar system. Advantages of this option include:</p>
            <p style='text-align:left;font-weight:bold'>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Little to no upfront installation costs.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> 20-year performance guarantee.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Sungevity makes it easy to transfer to the
            next owner if you move.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Custom design for your $city_name solar
            system means your overall costs plus your new electric bill is less than you're paying right now each month.<br></p>
            ";

            echo $content[rand(0, count($content)-1)];

            ?>
            <div class="text-center">
                <a class="btn btn-orange"
                href="https://sungevity.com/financing-options/#lease_solar" title="Get A Free Quote"><i
                class="fa fa-credit-card" aria-hidden="true"></i> 
            &nbsp;EXPLORE A SOLAR LEASE</a>
        </div>
    </div>
    
</div>
</section>