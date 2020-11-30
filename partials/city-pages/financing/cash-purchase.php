<section style="background-color:lightgrey;">
    <div class="d-flex justify-content-center">
        <div class="m-5 text-center width-50">
            <p><a class="solar_pricing" name="cash_purchase"></a></p>
            <?php 
            $city_name = get_field("city_name");
            $content = array();
            $content[] = "<h2>$city_name Solar Cash Purchase</h2>
            <p>With a $city_name solar cash purchase, you make all of your solar payments up
            front. Sungevity will provide a complete twenty-year parts and labor warranty in
            $city_name. Your $city_name solar energy system will pay
            for itself within five to ten years. Why wait when you can go solar today!
            </p>";
            $content[] = "<h2>Why A $city_name Solar Cash Option?</h2>
            <p>Whether you are looking to buy your first solar energy system in $city_name you should definitely consider using a cash purchase. Why would you want to buy your $city_name solar system outright?</p>
            <p style='text-align:left;font-weight:bold;'>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> No monthly $city_name solar payments.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Federal and state tax incentives (if eligible -- be sure to consult with a tax advisor ahead of time.)<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Hassle-free solar payment process -- you can even pay by credit card and earn points if your credit card has a rewards program.<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> 24/7 monitoring and 20-year $city_name solar energy system warranty.</p><br>
            ";
            $content[] = "<h2>What Are Your $city_name Cash Purchase Options?</h2>
            <p>Buying a $city_name solar power system is a economical and fruitful option. What $city_name solar cash purchase options do you have?</p>
            <p style='text-align:left;font-weight:bold;'>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Pay in full upfront<br>
            <i class='fa fa-check' aria-hidden='true' style='color:#f26322;'></i> Get a personal or home equity line of credit</p><br>";
            $content[] ="<h2>A Savvy $city_name Solar Cash Purchase</h2>
            <p>A solar cash purchase is a smart investment for $city_name homeowners. $city_name solar systems come with a
            variety of incentives for solar cash buyers, and the immediate savings means you'll recoup the costs long before
            the warranty runs out.</p>
            <p>With a complete solar purchase, you'll own your solar panels with no recurring monthly payments. Other advantages
            include taking advantage of tax credits and possible net metering. You may pay from checking or savings or via a
            home equity line of credit. Savvy buyers have even used credit cards to take advantage of credit rewards as well.
            </p>
            ";


            $cash_purchase_content = $content[rand(0, count($content)-1)];
            echo $cash_purchase_content
            ?>
            <div class="text-center">
                <a class="btn btn-orange text-center"
                href="https://sungevity.com/financing-options/#cash_purchase" title="Get A Free Quote"><i
                class="fa fa-money" aria-hidden="true"></i> &nbsp;EXPLORE A CASH
            PURCHASE</a>
        </div>
    </div>
</div>
</section>