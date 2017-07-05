Pagewizard
==========

Create new page trees with an easy-to-use step by step wizard. New page trees are cloned from predefined page trees which of course can hold content elements.
* Ever got tired of creating the same page tree over and over again by hand?
* Ever got tired of hand-copy-pasting page trees and having to clean up the result?

**TYPO3 Pagewizard is here to make your life more fun! :-)**

## Features
* Predefine any number of page trees in a folder of your choice
* Add a new predefined tree by menu option or page context menu

## Configuration

Add the following TypoScript setup to specify your storage folder:
```
module.tx_pagewizard {
	persistence {
		storagePid = 73
	}
}
```

Make sure you can copy pages recursively:
* Go to User Settings > Edit & Advanced functions > Recursive Copy
* Enter the number of page sublevels to include, when a page is copied

## TODO
* Create 6.2 compatible version

## Credits

You can say thanks at [@TuurlijkNiet][5]

[5]: https://twitter.com/TuurlijkNiet "Twitter"