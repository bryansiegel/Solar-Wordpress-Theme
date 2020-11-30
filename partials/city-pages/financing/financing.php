<section>
    <div class="d-flex justify-content-center">
        <div class="m-5 width-50 text-center">
            <p><a class="solar_pricing" name="finance_solar"></a></p>
            <?php 
            $city_name = get_field("city_name");
            $content = array();
            $content[] = "<h2>Finance a $city_name Solar Loan</h2>
            Solar loans in $city_name help homeowners own thier solar energy system, and pay for their system over a period of time. We can help you get a competitive financing rate in $city_name through our vast network of solar financing companies.";
            $content[] = " <h2>Why Would You Finance a $city_name Solar Loan?</h2>
            <p>Financing a $city_name solar loan is an excellent option if you don't want to pay for your solar energy system all up-front. Why would you consider solar financing?</p>
            <p style='text-align:left;font-weight:bold'>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Affordable monthly payments.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Federal and state tax incentives you’re eligible for.<br>
            Depending on your loan terms and energy usage, your loan payment plus remaining electric bill should be less than your previous electric bill.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> 24/7 monitoring and 20-year system warranty.<br>
            </p>
            ";
            $content[] = " <h2>Why You Should Consider $city_name Solar Financing?</h2>
            <p>Solar financing is the most common way of paying for solar installation in $city_name. When you finance your $city_name solar installation a third-party company finances the loan. What are the advantages of financing solar?</p>
            <p style='text-align:left;font-weight:bold;'>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Affordable monthly solar payments in $city_name.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Possible Federal and state tax incentives.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Depending on your financing terms and energy usage, your loan payment plus remaining electric bill could be less than your previous $city_name electricity bill.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> 24/7 monitoring and 20-year system warranty.
            </p>
            ";
            $content[] = "<h2>Benefits of Solar Loan Financing for $city_name</h2>
            <p>A $city_name solar loan is a great way to own your solar panels without putting all the money up front. By
            financing your solar system, you'll get:</p>
            <p style='text-align:left;font-weight:bold;'>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Federal and state tax incentives.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> 24/7 monitoring.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> A 20-year parts and labor warranty.
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> More money in your pockets each month!<br>
            ";

            echo $content[rand(0, count($content)-1)];

            ?>
            <div class="text-center">
                <a class="btn btn-orange mt-2 text-center" href="<?php get_home_url(); ?>/financing-options/#finance_solar" 
                    title="Get A Free Quote">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                &nbsp;FINANCE A SOLAR LOAN</a>
            </div>
        </div>
    </div>
</section>