<?php 

//City Pages Cash Purchase

$cash_purchase_content;

function cashPurchase() {
                global $cash_purchase_content;
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
                // global $cash_purchase_content;
                return $cash_purchase_content;

}

//FAQs

$GLOBALS['faq_content'];

function faqContent() {

                $city_name = get_field("city_name");
                $content = array();
    
                $content[] = "<div style='text-align:left;'>
                        <div class='faq' id='why-sungevity'>
                                                <p class='question'>Why a Sungevity Solar energy plan?</p>
                                                <div class='faq-answer' id='energy-consumption'>
                                                    We power lives with sunshine. By designing beautiful $city_name solar systems and providing flexible $city_name financing plans, we enable people to generate their own energy and save money.
                                                </div>

                                            </div>
                                            <div class='faq' id='plan-end' style='text-align:left;'>
                                                <p class='question'>What happens when my $city_name solar energy plan ends?</p>
                                                <div class='faq-answer'>
                                                    <p>Your Sungevity $city_name solar energy plan lasts 20 years. At the end of the agreement, you can choose to renew your lease or have the system removed from your house.</p>
                                                </div>
                                            </div>
                                        </div>";
    $content[] = "	<div class='faq' id='payments' style='text-align:left;'>
                                                <p class='question'>What are my payments?</p>
                                                <div class='faq-answer'>
                                                    <p>We offer a number of $city_name payment options for those who qualify, including a $0 money down solar lease, a pre-paid lease, fixed payment lease, and a Power Purchase Agreement (PPA). Note that financing options differ by location and credit history. After we've consulted with you about your current (and future) $city_name energy use, we use our remote proprietary design tool to engineer a custom solar solution for your home. We use handpicked, local solar experts to install your solar system.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='what-next' style='text-align:left;'>
                                                <p class='question'>What happens after I sign up to go solar with Sungevity?</p>
                                                <div class='faq-answer'>
                                                    <p>After you sign up, we'll start working on getting your $city_name solar system up and running by scheduling a home visit with one of our excellent local installers. We'll also handle the permits and other paperwork for you. After installation, we provide monitoring tools so you can track your system&rsquo;s production.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='excess-production' style='text-align:left;'>
                                                <p class='question'>What if my system generates more electricity than I use?</p>
                                                <div class='faq-answer'>
                                                    <p>Depending on your $city_name utility, you may get a credit for this excess production. The additional electricity your system produces flows back into the grid and runs your meter backwards, earning you credits. Then, when it's dark, you draw electricity back from the grid.</p>
                                                </div>
                                            </div>
                                        </div>";
    $content[] = "<div style='text-align:left;'>
                                            <div class='faq' id='solar-right'>
                                                <p class='question'>Is solar right for my $city_name home?</p>
                                                <div class='faq-answer'>
                                                    <p>We offer a no-pressure consultation to help figure out if going solar works for you. First, we'll gather all 12 months of your past energy use in $city_name. That's what makes our $city_name quotes as accurate as possible, by both the amount by which we can offset your use and the cost/savings potential of going solar. By learning how your usage fluctuates from month to month, and because both solar production and utility rates fluctuate as well, knowing all 12 months makes the quotes as accurate and personalized as possible. We'll then use our remote proprietary design tool to engineer a custom solar solution for your home. Of course, we also complete all of the interconnection paperwork on your behalf. And finally, we use local solar experts to install your solar system hassle-free.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='roof'>
                                                <p class='question'>How big a roof do I need in $city_name?</p>
                                                <div class='faq-answer'>
                                                    <p>This depends on your $city_name usage history. When you request an iQuote, Sungevity will use our proprietary design tool to look at your roof and determine how many $city_name solar panels it can accommodate.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='re-roof'>
                                                <p class='question'>Should I re-roof my $city_name house before I install solar panels?</p>
                                                <div class='faq-answer'>
                                                    <p>$city_name Solar panels last a long time so it makes sense to avoid having to remove and reinstall them. Your Solar Consultant will help you assess the need to re-roof.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='shaded'>
                                                <p class='question'>What if my $city_name roof is shaded?</p>
                                                <div class='faq-answer'>
                                                    <p>Shade reduces the amount of electricity your $city_name solar energy system can produce. Our remote solar design team will work to position your panels where they will get maximum sun exposure. On occasion, we find that a roof is too shady to make solar feasible.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='maintenance'>
                                                <p class='question'>Do $city_name solar systems require maintenance?</p>
                                                <div class='faq-answer'>
                                                    <p>$city_name solar systems generally require very little maintenance. If you lease a system, we guarantee your system's energy production. If you ever have any questions about what maintenance is necessary, please contact us at <a href='mailto:customerservice@sungevity.com' target=''>customerservice@sungevity.com</a>.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='blackout'>
                                                <p class='question'>Will I have power during a blackout?</p>
                                                <div class='faq-answer'>
                                                    <p>In the event of a $city_name blackout, your inverter will automatically shut down for safety reasons. Thus you will not have electricity until power is restored to the grid.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='batteries'>
                                                <p class='question'>Are battery options available in $city_name?</p>
                                                <div class='faq-answer'>
                                                    <p>Yes, Sungevity offers battery solutions with your grid-tied solar system in $city_name.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='bad-weather'>
                                                <p class='question'>Do $city_name solar panels generate electricity in bad weather?</p>
                                                <div class='faq-answer'>
                                                    <p>$city_name Solar panels need sun to generate electricity, but even in areas with bad weather your system will still produce. If you live in a cloudy area, or an area with seasonal snow, your expected weather conditions will be factored into our estimates for your energy production.</p>
                                                </div>
                                            </div>
                                            <div class='faq' id='fog'>
                                                <p class='question'>Does solar work in foggy neighborhoods?</p>
                                                <div class='faq-answer'>
                                                    <p>$city_name Solar systems continue to produce even when it's cloudy. For example, on a cloudy day, your panels might produce 30% of what they normally would. If you live in a cloudy area, or an area with seasonal snow, your expected weather conditions will be factored into our estimates for your energy production.</p>
                                                </div>
                                            </div>
                                        </div>";
    $content[] = "<h3>$city_name Solar FAQ's</h3>

    <p class='question'>How much does solar in $city_name cost?</p>
    <div class='faq-answer'>
    Our solar systems are custom-designed to each family's unique needs, so there's no cookie-cutter answer. Since we custom
    design, we ensure you save money over your current energy bill. And we offer a variety of payment options to fit your
    needs.</div>

    <p class='question'>How does it work?</p>
    <div class='faq-answer'>
    When you contact Sungevity about $city_name solar installation, the process is easier than many people think. We are
    able to design your home solar system using high-resolution satellite imagery, meaning we can do it all for you by phone
    and show you what it looks like on your computer. There's no need to meet in person! When you sign up to get our solar
    design installed, we work closely with local installers and we handle permits and paperwork. After it's all set up, we
    provide monitoring tools so you can track your solar energy production on your smartphone.
    </div>

    <p class='question'>What is net metering?</p>
    <div class='faq-answer'>
    <p></p>Net metering with solar is a billing mechanism that gives you credits back on your electric bill when your panels
    produce more electricity than your home uses in a month. In short, it means your solar panels could potentially MAKE you
    money!</p>

    <p>Net metering is only available in certain areas from certain utilities, and sometimes the rules change. We'd have to
    ensure on a given day that net metering in $city_name is still available to homeowners.</p>
    </div>
    ";
                    
                    $faq_content = $content[rand(0, count($content)-1)];
                    $GLOBALS['faq_content'];
                    return $faq_content;
               
}