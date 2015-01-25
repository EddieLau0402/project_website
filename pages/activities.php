<?php 
/**
 * Activities page.
 *
 * @author Eddie
 */
?>
<?php /** Prepare slide pictures. */
$imgPath = "./asset/img/diving";
$picList = array(
	"diving_1.jpg", 
	"diving_2.jpg", 
	"diving_3.jpg", 
	"diving_4.jpg", 
	"diving_5.jpg", 
);
?>

<div class="content">
  <div class="container">
    <div class="row">
      <!-- Left column -->
      <!-- <article id="left-column" class="col-lg-3 col-md-4 col-sm-12 col-xs-12"></article> -->

      <!-- Main-wrapper -->
      <!-- <article id="main-wrapper" class="col-lg-9 col-md-8 col-sm-12 col-xs-12"> -->
      <article id="main-wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php if (isset($picList) && !empty($picList)) { ?>
        <!-- slider -->
        <div id="activities-slider" class="flexslider">
          <ul class="slides">
            <?php foreach ($picList as $pic) { ?>
            <li><img src="<?php echo "{$imgPath}/{$pic}"; ?>" /></li>
            <?php } ?>
          </ul>
        </div>
        <!-- carousel -->
        <div id="activities-carousel" class="flexslider">
          <ul class="slides">
            <?php foreach ($picList as $pic) { ?>
            <li><img src="<?php echo "{$imgPath}/{$pic}"; ?>" /></li>
            <?php } ?>
          </ul>
        </div>
        <?php } ?>
      </article>

      <article id="main-wrapper" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <section>
          <h3 id="section-diving">DIVING</h3>
          <h4>Explore the sites of South Ari Atoll!</h4>
          <p>South Ari Atoll is home to some of the most famous and well known dive spots across the Maldives. Dhigurah is wonderfully situated directly next to some of the diving hot spots offering quick and easy access to a lot of these sites.</p>
          <p>We are home to whale shark area located only few 10 miuntes boat ride. Declared by the Maldivian government, the South Ari atoll Marine Protected Area (MPA) became the largest protected area in the Maldives encompassing 42 km² of coral reef habitat. The area was selected for protection because of its importance as a globally significant aggregation site for the whale sharks. In the months of January until December, there is a good chance of swimming with the whale sharks. Manta rays can easily be spotted in Dhigurah lagoon, from December to end of March. We are also next to some of the maldives best diving hot spots offering quick and easy access to a lot of these sites including Manta point, kudarah thila,broken rock,thinfushi thila etc..40+ dive sites..</p>
          <p>We have state-of-the-art PADI certified 5 Star dive center with professional foriegn and local dive masters. The dive centre features Guided Diving Boat Trips and Night Snorkeling Trips on the House Reef, Equipment and Accessory Sales, Rental and a complete PADI Instructional Program. Boat trips are available every day of the week. Full day, early morning and night dive excursions are organized regularly. All the dive sites are within 10 to 15 minutes by boat from the Dhigurah Island. Single dives to dive packages are available for certified divers.</p>
        </section>
      </article>
      
      <article id="main-wrapper" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <section>
          <h3 id="section-things-to-go">THINGS TO DO</h3>
          <p>In addition to experiencing the Maldivian culture you get to feel and first hand experience only at the IRIS. So come and indulge the authentic island life guided excursions. Thisincludes Scuba Diving, snorkeling, island hopping, resort tours, sunset cruises, fishing, Dolphin safari and Whale shark safari. We also provide more simulating board games at our Cafe to entertain you through the day and night.</p>
          <div class="thumb">
            <img src="./asset/img/Dhigurah_14.jpg" />
          </div>
        </section>
      </article>

    </div>
  </div>
</div>
