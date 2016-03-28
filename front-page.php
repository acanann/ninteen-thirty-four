<?php get_header(); ?>

<section class='photo-block' id='test-block'>
  <div class='photo-block__content'>
    <h2>Apply for UCLA UniCamp</h2>
    <h4>Apps due: Friday 7th week<br />www.unicamp.org/apply</h4>
    <a class='button button--homepage'>Learn More &rarr;</a>
  </div>
</section>

<section class='photo-block' id='test-block-2'>
  <div class='photo-block__content'>
    <h2>UCLA Student's Official Philanthropy</h2>
    <h4>UniCamp is an indepently funded 501(c)3 that annually links 500 UCLA student volunteers with over 1,200 urban LA youth.</h4>
    <div class='expand expand--collapsed'>
      <a href='#' class='button button--homepage expand__button'>
        More <i class='expand__button__icon'></i>
      </a>
      <div class='expand__content'>
        Content to show on expand
      </div>
    </div>
    <blockquote class='photo-block__blockquote'>
      "Children have a right to a childhood filled with beauty, joy, adventure, and companionship. They will grow if the soil they are nurtured in is rich with experience, love and good examples."
      <cite class='photo-block__blockquote__cite'>Alan Dyer "A Sense of Adventure"</cite>
    </blockquote>
  </div>
</section>

<section class='photo-block' id='test-block-3'>
  <div class='photo-block__content'>
    <h2>Serving LA youth since 1928</h2>
    <h4>UniCamp has served over 60,000 youth and over 10,000 volunteers over the past 80 years.</h4>
    <a class='button button--homepage'>Learn More</a>
  </div>
</section>

<section class='photo-block continuum-of-care'
data-blocked-animation
data-blocked-animation-dead-zone='700'
data-blocked-animation-blocks='4'>
  <div class='continuum-of-care__fixed' data-fixed-block>
    <h2 class='continuum-of-care__header'>UCLA UniCamp's "Continuum of Care"</h2>
    <img class='continuum-of-care-block__logo'
    src="<?php echo get_template_directory_uri(); ?>/images/samples/continuum-of-care.svg" />
    <span class='continuum-of-care-block__text continuum-of-care-block__text--animation1'>
      "Creating the opportunity for today's kids from underserved communities to become UCLA UniCamp campers&hellip;"
    </span>
    <span class='continuum-of-care-block__text continuum-of-care-block__text--animation2'>
      "Enabling today's campers to become tomorrow's Student Volunteers&hellip;"
    </span>
    <span class='continuum-of-care-block__text continuum-of-care-block__text--animation3'>
      "Empowering today's UCLA Student Volunteers to become tomorrow's community leaders&hellip;"
    </span>
    <span class='continuum-of-care-block__text continuum-of-care-block__text--animation4'>
      "Creating opportunities for Community Leaders to contribute to the successful development of today's underserved kids."
    </span>
  </div>
</section>

<section class='row content-row'>
  <div class='medium-12 columns'>
    <h2>Programs</h2>
    <h4>UCLA UniCamp can be described as having many "Camps within a camp."</h4>
  </div>
  <div class='medium-6 columns'>
    <div class='hover-image'>
      <img
      class='hover-image__image'
      src='<?php echo get_template_directory_uri(); ?>/images/samples/water-coyote-1.jpg' />
      <div class='hover-image__text'>
        <div class='hover-image__text__title'>
          Classic UniCamp. Ages 10-14
        </div>
        <div class='hover-image__text__blurb' style='display: none'>
          And here's some more info about Classic Camp
        </div>
      </div>
    </div>
  </div>
  <div class='medium-6 columns'>
    <div class='hover-image'>
      <img
      class='hover-image__image'
      src='<?php echo get_template_directory_uri(); ?>/images/samples/water-coyote-1.jpg' />
      <div class='hover-image__text'>
        <div class='hover-image__text__title'>
          Older Camper Programs. Ages 15-17
        </div>
        <div class='hover-image__text__blurb' style='display: none'>
          And here's some more info about Older Camper Programs.
          <br />
          <a class='button button--homepage'>Maybe a button &rarr;</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class='row content-row'>
  <div class='medium-12 columns'>
    <h5>Sponsors of UCLA UniCamp</h4>
    <div class='logo-table logo-table--3col'>
      <div class='logo-table__logo'>
        <img
        alt='Los Angeles Times'
        src='<?php echo get_template_directory_uri(); ?>/images/logos/latimes-logo.png' />
      </div>
      <div class='logo-table__logo'>
        <img
        alt='Robert R. McCormick Foundation'
        src='<?php echo get_template_directory_uri(); ?>/images/logos/mccormick-logo.png' />
      </div>
      <div class='logo-table__logo'>
        <img
        alt="Children's Hospital, Los Angeles"
        src='<?php echo get_template_directory_uri(); ?>/images/logos/chla-logo.jpg' />
      </div>
    </div>
    <div class='expand expand--collapsed'>
      <div class='expand__content'>
        <div class='logo-table logo-table--3col'>
          <div class='logo-table__logo'>
            <img
            alt='Los Angeles Times'
            src='<?php echo get_template_directory_uri(); ?>/images/logos/latimes-logo.png' />
          </div>
          <div class='logo-table__logo'>
            <img
            alt='Robert R. McCormick Foundation'
            src='<?php echo get_template_directory_uri(); ?>/images/logos/mccormick-logo.png' />
          </div>
          <div class='logo-table__logo'>
            <img
            alt="Children's Hospital, Los Angeles"
            src='<?php echo get_template_directory_uri(); ?>/images/logos/chla-logo.jpg' />
          </div>
        </div>
      </div>
      <a href='#' class='expand__button expand__button--full'>
        See all <i class='expand__button__icon'></i>
      </a>
    </div>
  </div>
</section>

<section class='photo-block' id='contact-block'>
  <div class='row content-row'>
    <div class='medium-12 columns'>
      <h2>Contact us</h2>
    </div>
    <div class='medium-5 columns end'>
      <?php echo do_shortcode("
        [contact-form to='byronlutz@gmail.com' subject='[UniCamp.org Contact Form Submission'][contact-field label='Name' type='name' required='1'/][contact-field label='Email' type='email' required='1'/][contact-field label='How can we help you?' type='textarea' rows='10' required='1'/][/contact-form]");
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>