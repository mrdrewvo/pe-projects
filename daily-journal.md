[back to Drew Vo Homepage](http://peprojects.dev/alpha-6/drew/projects/personal-website/index.html)

# My Daily Journal

## Markdown Formatting Resources: [Github](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet), [TowardsDataScience](https://towardsdatascience.com/the-ultimate-markdown-cheat-sheet-3d3976b31a0#c107), [The Markdown Guide](https://www.markdownguide.org/cheat-sheet/)

---

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