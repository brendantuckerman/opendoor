# This file sould be removed before deployment *
# There is a lot of material that can be folded into readme

#### OpenDoor Theme for Drupal ####

### Aims ###

There are 4 aims of OpenDoor Theme, in order of importance:

1. Accessibile

This means it should be a minimalist design. Colours need to be AAA only. 

Each element should be built with accessibility in mind--nothing should be added without that consideration. 

2. Simple 

Both code and knowledge needing to make it work
Should be easy to view for the user and employ for the site admin. Pages are not becoming more accsssible year on year, mostly because of their complexity.

- Flexible


Should be mobile first. Will need to review mobile & 

- Visually appealing.

All decisions made in the design and build of these theme should ask whether each of these are met. Anything that is not accessible should be left behind.

### Why Accessibility? ###



From an economic perspectve, $1 spent on accessibility brings back $100. People with a disability spend $1 trillion annually, and people who are friends / family of those with a disability prefer to spend aat organisations that are accessible. Overall, this brings the total to $8 trillion annually (Forrester, 2022).




##

TODO:

- install theme ☑
 * File name changes ☑
 * Files changed to remove Olivero references ☑
- Settings. ☐
   * Colour selection should allow for primary choices. ☑
   * Colour contrast all colours should be AAA OR replaced/ adjusted  ☐
   * If a custom colour is picked, we need some way of adjusting it for all colour blindess mode
- Add detail to the TODO list here ☐
- Readme.txt ☐
- Replace Oliver with opendooor ☐
- Create pairs of accessible colours ☐
- Delete TODO.txt ☑
- Remove example from theme-setting.php ☐

- Accessibility

   1. Colour Blindness
   * in order for Colour blindess mode to function, default colours will need to be set. Where these colours are used, they can be replaced with the versions below in the CB modes section below.
   green:
   purple:
   red:
   orange:
   blue:

  * colour blindness modes (original colours are just a label. i.e. this is not meant to be a 1:1 replacement so dont be shocked when red is not red, man)
  https://www.colourblindawareness.org/colour-blindness/types-of-colour-blindness/
   # DEFAULT
   green: #d6f6dd
   purple: #dac4f7
   red: #f4989c
   orange: #ebd2b4
   blue: #acecf7

    # PROTANOPIA / DEUTERNOPIA
   green: #e3e4e3
   purple: #d0d0ea
   red: #cccb9b
   orange: #e0dfbb
   blue: #c7c8f4
   # TRITANOPIA
   green: #d7e7e8
   purple: #d8E0DE
   red: #ef9a9a
   orange: #e9c0c2
   blue: #aff2f1
   # ACHROMATOPSIA
   green: #e9e9e9
   purple: #d0d0d0
   red: #b3b3b3
   orange: #d6d6d6
   blue: #dadada
   # PROTANOMALY / DEUTERANOMALY 
   green: #dcede0
   purple: #d5c9ef
   red: #e1af9b
   orange: #e6d8b8
   blue: #b8dbf5
   # ACHROMATOMLY
   green: #e0efe3
   purple: #d4cae1
   red: #d1a7a8
   orange: #dfd4c6
   blue: #c5e2e7

2. Dislexia


3. Vision impairmnet


4. Hearing impairment


5. Cogniitive impairment

- Header ☐
- Footer ☐
- Standard page ☐
- Standard page all sections ☐
- work through all sections of Dev a11y training ☐
- Menus ☐
- Form and form elements ☐

* Mobile *

- Ensure navigation via VoiceOver / TalkBack friendly
- Ensure zoom not disabled: 
   https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Accessibility/Mobile
-   
For mobile-- touchscreen elements should be larger. Forms should have as little typing as possible. There are tools on iOS/ Android for converting to more accessbile iOS VoiceOver / Android TalkBack