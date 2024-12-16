<?php
# Dark Mode
// https://www.mediawiki.org/wiki/Extension:DarkMode
wfLoadExtension('DarkMode');
// $wgDarkModeTogglePosition = 'personal';

# TabberNeue
// https://www.mediawiki.org/wiki/Extension:TabberNeue
// wfLoadExtension('TabberNeue');
// $wgTabberNeueEnableAnimation = true;
// $wgTabberNeueParseTabName	= false;
// $wgTabberNeueUpdateLocationOnTabChange = true;
// $wgTabberNeueUseLegacyTabIds = false;

# DynamicPageList
// https://www.mediawiki.org/wiki/Extension:DynamicPageList
// wfLoadExtension('intersection');
# Configuration variables. Warning: These use DLP instead of DPL
# for historical reasons (pretend Dynamic list of pages)
// $wgDLPmaxCategories = 6;                // Maximum number of categories to look for
// $wgDLPMaxResultCount = 200;             // Maximum number of results to allow
// $wgDLPAllowUnlimitedResults = false;    // Allow unlimited results
// $wgDLPAllowUnlimitedCategories = false; // Allow unlimited categories
// How long to cache pages using DPL's in seconds. Default to 1 day. Set to
// false to use the normal amount of page caching (most efficient), Set to 0 to disable
// cache altogether (inefficient, but results will never be outdated)
// $wgDLPMaxCacheTime = 60*60*24;          // How long to cache pages in seconds

# ParserFunctions
// https://www.mediawiki.org/wiki/Extension:ParserFunctions
wfLoadExtension('ParserFunctions');
// $wgPFEnableStringFunctions = false;
// $wgPFStringLengthLimit = 1000;

# ForceAspectRatio
// wfLoadExtension('ForceAspectRatio');
