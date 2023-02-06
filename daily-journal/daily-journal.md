[back to Drew Vo Homepage](http://peprojects.dev/alpha-6/drew)

# My Daily Journal

## Markdown Formatting Resources: [Github](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet), [TowardsDataScience](https://towardsdatascience.com/the-ultimate-markdown-cheat-sheet-3d3976b31a0#c107), [The Markdown Guide](https://www.markdownguide.org/cheat-sheet/)

---
## SAT 2023.02.04
* Feedback on Theme Challenge:
	* Add more space between Header and Graphic Diptych
	* Graphic diptych: Add more space between h1 the p
	* Article text
		* switch space size above and below the p
		* more padding above the “see all teams” link
	* General:
		* Make buttons smaller/tighter
		* Maybe more space between the sections - use a clamp so you have a mix/max (or use mix/max between vw/vh)
	
Header - how to prevent it blending into other colored elements
- change color?
- line separator?

CTA cards bigger and more space between picture and text



## FRI 2023.02.03
* hoping this pushes all of my files to our FTP server. I deleted everything bc many files were out of date.

## THU 2023.02.02
* got my Home Depot resume out to Daquanna!
* going to focus today on my personal site. It's gotta be CLEAN!

## WED 2023.02.01
* Derek 1:1
	* CI/CD: continuous integration (getting into the Git), use automated QA testing like Travis, then continuous deployment
	* building CMS not "WordPress", PHP, HTML, CSS, eye for visual design

## FRI 2023.01.27
* Derek 1:1
	* curvy/gradient background --> use shape divider
	* I’m not sure how to have section backgrounds bleed into other sections --> use negative margin
	* I’m not sure how to create scrolling banners of article cards. These sites are full of them! These sites' sections are all slideshows of article cards. Hardly any single CTA sections --> simplify this to cards
	* Unsure how to add floating background shapes or more images in the sections using only CSS
		* :before/:after
		* original intent was to add things like dollar signs
		* use double colons ::
		* cons: not accessible cuz screen reader doesn't recognize the added content
		* you must have content declared

## MON 2023.01.23
* job hunting
	* there are a lot of shops where ur expected to do HTML CSS and some PHP
	* Look at marketing web design shops
	* ask what these agencies are looking for

## TUE 2023.01.10
* Accomplishments
	* PHP Array basics and some “loops” milestone
	* Read through the PHP walkthrough


## MON 2023.01.09
* Accomplishments
	* DoorDash style and branding research, set up SOW
	* 30 min on Substack
	* Lesson

* PHP Early Exploration Notes
	* If you're only writing PHP, you don't need the closing bracket (it might even cause more issues like if there's a space after the bracket)
echo [text] outputs text (requires "" for strings)
		* print_r("[text]"); does the same thing, but more for developer stuff
		* you need a space between echo and the text so it recognizes the echo keyword vs the text to echo
	* Default to " " instead of ' '
	* you can now reference variables in a string without using concatenate (.) and instead, go ahead and write the variable. It'll automatically add it to the string (string interpolation). You can also use {} around the variable so you can add characters immediately before or after the variable.
	* 5 different ways to make a comment
		* `//`
		* `/* [text] * /` (can be made into multiline)
		* `<! -- [text] -->` (outside the PHP tags and can be made into multiline) - note that the HTML comments stay in the page source but the PHP comments will be gone!

## SAT 2022.12.17

* Had Derek basically do my design for me, from the style tile to actual layouts at different screen sizes

## THU 2022.12.15

* First real day having my own schedule after the layoffs. Feeling focused and grateful for the space to look at my lesson exercise and be present.
* Creativity - Trust the process. Take breaks, but keep going
* Blog idea: boxes in boxes, feeling put in a box and getting the courage to escape the comfort of a box
* apparently envokes isn't a word. It's either invokes (direct/active) or evokes (indirect/passive)

## MON 2022.12.12

* really do start with mobile layout first... it was hard going backward

## TUE 2022.12.06

* Finally putting my mood boards together for the exercise but I am not feeling it. How do I better gather artwork? I don't look at much art a day

## WED 2022.12.01

* learned about what PHP is for the first time!
* sad to see my site wasn't made with reset.css so my original formatting didn't work haha

## SUN 2022.11.20

* Yesterday, learned about CSS positioning properties and started drawing boxes for the super responsive layout challenge
* Today, gonna tackle the rest of the challenge

## FRI 2022.11.18

* Catching back up on school work
* Box framed wired.com, emphasizing that everything really is a box in a box
* Created responsive layout based on wired.com. Was a little ambitious doing three secitons but it worked!
* I need to write more!
* I want to organize my P.E. stuff.
	* number my Affinity Designer files. Link them into my work
	* number my Code Pens. Link them into my work
	* Should I really go through all 70 LESSONS!? haha

## WED 2022.11.16

* Finished Flexbox Exercise 1 Variant 3 and Exercise 2, but it was tougher on Exercise 2 where I had to use `padding` more often to get the element shapes to match the goal.
* Couldn't start the lesson exercises for lesson 66. Setting too many commitments to myself.

## TUE 2022.11.15

* Flexbox Day! Before made a grid of the different justify-content and align-items combos
* Got my new laptop!

## MON 2022.11.14

* I think I've gotten the hang of our layout concepts... maybe I should go back to our past exercises to clean them up and practice that way?


## SUN 2022.11.13

* Committing the following to my routine:
	* Organize: take inventory of my to-do backlog and purge. PE is my priority now!
	* Setting realistic commitments: at least... I think these are realistic haha
		* Daily: journal entry, 20min morning pages, commit files to Tower and sync to server and GitHub
		* Once weekly: 30min substack post
		* Twice weekly:  30min visual inspo exploration, 30min personal website work

## TUE 2022.11.08

* added critiques to my colleagues' client sites
* watched Tend Your Garden video - and yeah I really should tend my garden!
* added reader mode to Chrome and it's great!
* read about Morning Pages from Conria
	* it's a brain dump of 3 pages of non stop writing

## WED 2022.11.02

* started our first client project today!
	* I might be thinking too much about the bigger picture and asking the wrong questions...

## FRI 2022.10.28

* (For the most part)... Semantic elements are for content and organization (+ some formatting using classes) and divs are for formatting

## WED 2022.10.26 | `divs` are for real

### Lesson Notes
* Original websites for 960px wide
* Using `div` is purely for visual layouts. Structure should be laid out using semantic elements
	* Ultimately we want to separate the formatting of the section from an "inner-column", that way you're not confined

### Other Learnings
* [Understanding page width constraint](https://codepen.io/perpetual-education/pen/abpRdjJ)

## SUN 2022.10.23 | More catchup

### Other Learnings
* CSS (like other languages) is read top to bottom, so parameters will override one another
	* ex: `padding: 200px; padding-left:50px` will keep left at 50px but `padding-left:50px; padding: 200px` will have 200px all around
* Selectors (can be combined)
	* elements
	* * (universal/everything)
	* selector lists (using , ) - don't get too specific with the path
	* descendant combinators (no punctuations)

## FRI 2022.10.21 | Styling text and resets

### Lesson Notes

* font-weight: 400 is normal, 700 is bold
* advanced selectors
	*  

### Other Learnings

* 1:1 with Derek
	* eventually we'll try all of the elements - even backend, 
	* sr roles may not really mean you have more experience in being a developer, but could mean domain space
* Why do 
* Bruce Mau's 24 Principles of Design for Transforming the World
	* Redesigning Everything: A New Era of Massive Change


## TUE 2022.10.18

### Lesson Notes

* don't name your div classes around where the element will be. focus on it's formatting characteristics
* iFrame is a way to put a website or piece of a website into yours
	* usually not a good idea because it's not crawlable = bad SEO
	* good for video embeds and things like Substack subscriber buttons
	* iFrames are inline elements by default
		* if you set an element as `display: block`, you have to also set `width: 100%`
* SEO just means write good code
* `min-height:` you can use `vh` for "viewport height" in percentage (e.g. 120vh is 120% of the viewport height)
* you can add identifiers (`id`) to a section to link to them
	* e.g. `<a href='#welcome'>Welcome</a>` will go to the `<section id="welcome">` tag on the page

## MON 2022.10.17 | Pen and CodePen

### Learnings

* `<span>` is just a way to format in-line

## SUN 2022.10.16 | HTML/CSS CHALLENGE!

### Lesson Notes

* `../` helps you go up a folder hierarchy
* QAing a page
	* open link in browser, mobile, and iPad
	* run metadata through FB debugger
	* run lighthouse on all pages while in incognito
	* run W3 validator for errors

### Learnings

* you don't need the full `a:link` css property. just `a` is fine
* store your metadata image in your root folder and not your project folder because it's the only link that's absolute, not relative
* Sublime
	* auto detects HTML syntax once file is saved as an ".html"
	* watch out where you're expecting the autopopulating elements/attributes/properties to come up (e.g. for css property `background`, it must be written under an element like `h2`)

## FRI 2022.10.14 | Introducing the Style Information element

### Lesson Notes

* Apparently 1994 HTML with styling in-line still has to be done that way for HTML emails
* **CSS (Cascading Style Sheets)**: a "style sheet" language - it describes the desired end result, "strongly suggesting" how our content is presented visually
	* For now, the `<style></style>`  section will go in the `<head></head>`

| Language  | Syntax Format                             |
| :-------: | ------------------------------------------|
| HTML      | attribute: value                          |
| CSS       | property: value (aka style "declaration") |

* `<abbr>`: used to have a hover abbreviation explanation
* Fonts
	* There is a Fontbook app native to Mac
	* There are ~10 universal fonts
	* If you download and use a unique font, you'll need to include that font file in your website
* Formatting
	* should be min 16px for readability
	* for line-height, use relative units

### Open Questions

* [X] How is everyone learning the possible attributes? I tried searching for the element and attributes in MDN but it doesn't list the attributes
	* OH! If you use the style attribute in, for example, the <body>  tag, I think you end up using CSS language within the style=' ' attribute (ex)
	* What about the attributes not found under style? Found these but align wasn't on this MDN list and I remember seeing Derek use it in one of the lessons (e.g. align="center")
	* Didn't really get an asnwer for this one but our [Features](https://perpetual.education/features/) page is good for now

## THU 2022.10.13 | A day in the life of a “visual designer”

### Lesson Notes

*  Affinity Designer
	* Use the Fill tool (G) to create a gradient
	* Gradients must be used to fill a shape (cannot be used to fill the canvas/background)
	* You can add more color points and fill in any type of shape
	* try changing their opacities

### Learnings

* Affinity Designer Gradients
	*  When an object with a linear or radial gradient fill is sheared (skewed) or transformed onto an isometric pane, an additional pair of correction points appears. [ref](https://affinity.help/designer/en-US.lproj/index.html?page=pages/Clr/gradientEditor.html?title=Gradient%20editing)


---

## WED 2022.10.12

### Lesson Notes

* **dpi**: dots per inch
* standard graphic size: page width 1200px, page height 630px

### Learnings

* Google Calendar for Slack didn't work out too well. Alina and I couldn't get the mutually available times to show up. We only see our own available times even after adding one other to the invitee list in the Create Event dialogue box.
* We are working out of our local files and using the PE server only to push and save our updated files.

---

## TUE 2022.10.11

### Lesson Notes
* **Protocol**: a set of rules /an agreed-upon system that defines how to transfer data
	* e.g. HTTP, FTP, POP3, IMAP, SMTP
	* HTTPS is a secure version of HTTP
* **Web Crawler (aka spider)**: software application or bot that downloads and catalogs webpage content and connections.
* A style sheet will contain overarching rules for formatting
* Viewing source code: `Right-click>View source`
* Inspect code: Shortcut for Chrome Dev tools `⌘ + ⌥ + i`
* Lighthouse scoring:
	* Open incognito window then run report
* **Metadata**: data about data

### Learnings

* from in Sublime, you can right-click and open the page in browser instead of opening it from the file in finder/Cyberduck
* got my emojis to show up using <meta charset="utf-8"/>

### Open Questions

* [x] Is it more difficult or more expensive to have an HTTPS protocol?
	* The hosting companies use this as a way to extort you --- but it’s technically free - — (they just won’t let you use the free one) — so, that’s a factor in deciding what companies to work with. Not having HTTPS - is really no longer an option - (your site just wont load in most cases)
* [x] Why do we need to run Lighthouse in an incognito window?
	* Some plugins like Grammarly - might inject code into the page - and change how the page loads. It’s not a huge deal - but if you’re looking for real data - we’ll be talking about many more tools. https://www.webpagetest.org/. https://pagespeed.web.dev/
* [x] I see best practice is to have an index.html file for each project, but what about like... our portal or word processor challenge that are one page each? Typically, does the project folder indicate the project name, and the file names inside just name the components (e.g. home, contact, etc)?
	* this is a convention that the ‘server’ languages have adopted. IF there is an index.html or index.php etc — it will automatically load that file  mysite/portal  - would look for mysite/portal/index.html   - and it’s nice to not have to type the file name and extension

---

## MON 2022.10.10

### Learnings

* From HTML, learned about the [title](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#properties) and [target](https://www.w3schools.com/tags/att_a_target.asp) attributes of an `<a href>` tag
* Found that simpler websites with more explicit CTAs are more effective
* in HTML files, references to links assume the same root folder as the current file - so you don't need the full URL!

### Open Questions
* How do I get this daily journal onto a server with markdown preview + git version control?


## TUE 2022.10.05

### Accomplishments

* created my [Substack](https://mrdrewvo.substack.com/?r=1mt9cf&utm_campaign=pub&utm_medium=web) account

## MON 2022.10.04

### How I feel

* Feeling nervous about all that I need to do for PE. I'm starting to feel a little lost. I think I'll schedule time with Derek and/or schedule more time for myself to work with my classmates.
* I'm pretty impressed I've gotten this far though, balancing family time, work, and school!

### What I learned

* Had more practice with setting up git
	* For the add command, the action occurs in the current directory so you don't need to rewrite the full file path again
 	* Got the hang of staging then commiting my daily journal entry
* Started HTML practice as well
	* Memorized the doc structure
	* Got some practice using basic features like links

## SUN 2022.10.03

### What I Learned

* .jpg (.jpeg) and .png are made of pixels
	* jpg for photos
	* png best for simple pictures with transparent background
* .svg for scalable pictures
	* drawing is made with math, not individual pixels
	* can be edited like an HTML file
	* makes small file sizes