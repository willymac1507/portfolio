<?php

?>

<section id="coding">
  <div class="coding-modal__container">
    <div class="coding--overlay"></div>
    <div class="coding-modal__content">
      <img class = "coding-modal__image" src="images/codeExample3_large.png" alt="enlarged code snippet">
    </div>
  </div>
  <div class="coding-main__container">
    <div class="coding-main__content">
      <div class="hamburger">
        <div class="hamburger__slice"></div>
        <div class="hamburger__slice"></div>
        <div class="hamburger__slice"></div>
      </div>
      <h1 class="coding-main__title">Coding Examples</h1>

      <div class="coding__example" id="example--1">
        <div class="coding__head">
          <h2>Slide down navbar</h2>
          <div class="coding__code">
            <picture class="coding__picture">
              <source media="(min-width: 992px)" srcset="images/codeExample1_large.png">
              <source media="(min-width: 768px)" srcset="images/codeExample1_medium.png">
              <img class="portfolio__image" src="images/codeExample1_small.png" alt="code snippet">
            </picture>
          </div>
        </div>
        <a href="#example--1" class="coding__scroller scroller--collapsed" title="Show More">
          <div class="icon icon--arrow-down"></div>
        </a>
        <div class="coding__text">
          <h3 class="coding__lang">Language: JavaScript / jQuery</h3>
          <p class="coding__desc">The code is responsible for displaying and hiding
            a
            navigation bar on smaller screens, with the provision of a 'hamburger' button. The code
            utilises jQuery to
            listen for a user click on the hamburger, at which point the function
            <code>toggleNav()</code>
            is called. This allows the navbar to be revealed by
            'sliding'
            down from the top of the page. The hamburger is styled to transform the three
            'slices'
            into a cross. Finally a page overlay is added to dim the background and
            block the ability to click on any other elements.
          </p>
          <p class="coding__desc">A further click on the hamburger slides the navbar up and reverts the
            hamburger to its original state, hiding the page overlay in the process. This action is also
            applied
            to the nav links to ensure the navbar hides when a link is clicked. A final click listener
            on the
            page overlay allows the user to close the navbar by clicking outside the navbar on the
            screen, and not only
            by clicking the hamburger.
          </p>
          <p class="coding__desc">The use of jQuery ensures that the animation is compatible with most
            browsers, including some legacy examples. In addition it allows for fairly complex
            animation in a few, concise
            lines of code.
          </p>
        </div>
      </div>

      <div class="example__group group--2">
        <h2>SQL Database query & subquery</h2>

        <div class="coding__example" id="example--2a">
          <div class="coding__head">
            <h3 class="coding__lang">Database Structure</h3>
            <div class="coding__code">
              <picture>
                <source media="(min-width: 992px)" srcset="images/soccerDatabase_large.png">
                <source media="(min-width: 768px)" srcset="images/soccerDatabase_medium.png">
                <img class="portfolio__image" src="images/soccerDatabase_small.png"
                     alt="code snippet">
              </picture>
            </div>
          </div>
          <a href="#example--2a" class="coding__scroller scroller--collapsed" title="Show More">
            <div class="icon icon--arrow-down"></div>
          </a>
        </div>

        <div class="coding__example" id="example--2b">
          <div class="coding__head">
            <h3 class="coding__lang">SQL Query</h3>
            <div class="coding__code">
              <picture>
                <source media="(min-width: 992px)" srcset="images/codeExample2_large.png">
                <source media="(min-width: 768px)" srcset="images/codeExample2_medium.png">
                <img class="portfolio__image" src="images/codeExample2_small.png"
                     alt="code snippet">
              </picture>
            </div>
          </div>
          <a href="#example--2b" class="coding__scroller scroller--collapsed" title="Show More">
            <div class="icon icon--arrow-down"></div>
          </a>
        </div>

        <div class="coding__example" id="example--2c">
          <div class="coding__head">
            <h3 class="coding__lang">SQL Output</h3>
            <div class="coding__code">
              <picture>
                <img class="portfolio__image" src="images/sqlOutput.png" alt="code snippet">
              </picture>
            </div>
          </div>
          <a href="#example--2c" class="coding__scroller scroller--collapsed" title="Show More">
            <div class="icon icon--arrow-down"></div>
          </a>
          <div class="coding__text text--group2">
            <h3 class="coding__lang">Language: SQL</h3>
            <p class="coding__desc">This example demonstrates my ability to query a SQL
              database, using joins and subqueries, to produce the output shown above.
            </p>
            <p class="coding__desc">The query is designed to show a list of goalscorers in the Euro 2016
              football championship along with their age, the club they played for at the time, and
              the number of goals scored. This is sorted by the age of the player in ascending order, and
              filtered using a subquery to show only clubs that were in the English Premier League in the 2015/16
              season.
            </p>
            <p class="coding__desc">The query gets data from three tables: player_mast, goal_details and
              premier_league, with the latter being a table that I created to allow the filter of EPL clubs only. An
              initial subquery (aliased as gs) produces a count of goals scored grouped by player_id. This squbquery is
              then joined to the player_mast table using the player_id as a foreign key. Finally, a further subquery on
              the premier_league table is used to filter the results.
            </p>
          </div>
        </div>

        <div class="coding__example" id="example--2d">
          <div class="coding__text">
            <h3 class="coding__lang">Language: SQL</h3>
            <p class="coding__desc">This example demonstrates my ability to query a SQL
              database, using joins and subqueries, to produce the output shown above.
            </p>
            <p class="coding__desc">The query is designed to show a list of goalscorers in the Euro 2016
              football championship along with their age, the club they played for at the time, and
              the
              number
              of goals scored. This is sorted by the age of the player in ascending order, and
              filtered
              using a
              subquery to show only clubs that were in the English Premier League in the 2015/16
              season.
            </p>
            <p class="coding__desc">The query gets data from three tables: player_mast, goal_details and
              premier_league, with the
              latter being a table that I created to allow the filter of EPL clubs only. An initial
              subquery (aliased as gs)
              produces a count of goals scored grouped by player_id. This squbquery is then joined to
              the
              player_mast table using the
              player_id as a foreign key. Finally, a further subquery on the premier_league table is
              used
              to filter the results.
            </p>
          </div>
        </div>
      </div>

      <div class="coding__example" id="example--3">
        <div class="coding__head">
          <h2>Saving form data in session variables</h2>
          <div class="coding__code">
            <picture>
              <source media="(min-width: 992px)" srcset="images/codeExample3_large.png">
              <source media="(min-width: 768px)" srcset="images/codeExample3_medium.png">
              <img class="portfolio__image" src="images/codeExample3_small.png" alt="code snippet">
            </picture>
          </div>
        </div>
        <a href="#example--3" class="coding__scroller scroller--collapsed" title="Show More">
          <div class="icon icon--arrow-down"></div>
        </a>
        <div class="coding__text">
          <h3 class="coding__lang">Language: PHP</h3>
          <p class="coding__desc">
            The code allows for the form to be submitted for server-side validation. The input is first sanitised
            and then sent to the validation function. However, this code stores the form data in session variables.
            This means that should the form fail validation, when the user is redirected back to the form, they will not
             have to refill the data that they have already entered in order to resubmit.
          </p>
          <p class="coding__desc">
            The code also calls the <code>formValidation()</code> function from the separate <code>functions.php</code>
             file. This function carries out server-side validation of each field and either returns <code>null</code>
            if all validation passes, or a multidimensional array containing details of any validation errors.
          </p>
          <p class="coding__desc">If this array is returned from the function, it is stored into a session variable
            which can then be accessed by the php code in the redirect page, <code>index.php</code>. In turn, this is
            used to provide more information to the user as to why the form has failed validation.
          </p>
        </div>
      </div>

      <div class="coding__example" id="example--4">
        <div class="coding__head">
          <h2>Filtering and searching on a dataset.</h2>
          <div class="coding__code">
            <picture>
              <source media="(min-width: 992px)" srcset="images/codeExample4_large.png">
              <source media="(min-width: 768px)" srcset="images/codeExample4_medium.png">
              <img class="portfolio__image" src="images/codeExample4_small.png" alt="code snippet">
            </picture>
          </div>
        </div>
        <a href="#example--4" class="coding__scroller scroller--collapsed" title="Show More">
          <div class="icon icon--arrow-down"></div>
        </a>
        <div class="coding__text">
          <h3 class="coding__lang">Language: PHP 7 / Laravel 8 / Blade</h3>
          <p class="coding__desc">
            The code allows the user either to filter the results of the specific dataset by the first letter (of last
            name or company name), or to carry out a text search on all columns of the data.
          </p>
          <p class="coding__desc">
            The code is a blade component that can be called anywhere in the site. It expects two props,
            <code>alphaSearch</code> for the required first letter filter (either 'name' for companies or 'lastName'
            for employees, and <code>mainSearch</code> which is either <code>employees</code> or
            <code>companies</code> depending on the data being filtered.
          </p>
          <p class="coding__desc">The component uses these props to set up a series of hyperlinks for each letter of
            the alphabet. The href for these links is comprised of <code>{{ mainSearch }}?{{ alphaSearch }}={{
              $letter }}</code>, with an example of the echoed html being <code>/employees?lastName=K</code>. This
            route is handled by the relevant controller method to return the filtered results set.
          </p>
          <p class="coding__desc">Similarly, the text search uses a form to send a get request to the same url.
            Again, this route is handled by the relevant controller method.
          </p>
          <p class="coding__desc">The component will check when called to see if the url already contains either an
            alpha search or a text search. If so, instead of showing a title of 'Filter Results', this will display a
            link to the unfiltered page, showing as 'Reset Filter'.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
