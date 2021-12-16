import { getAssetFromKV, mapRequestToAsset } from '@cloudflare/kv-asset-handler'

/**
 * The DEBUG flag will do two things that help during development:
 * 1. we will skip caching on the edge, which makes it easier to
 *    debug.
 * 2. we will return an error message on exception in your Response rather
 *    than the default 404.html page.
 */
const DEBUG = false

const redirectMap = new Map([
  ['/1989/06','https://geoff.sowrey.org/archives/#1989'],
['/1989/07/03/behind-iron-curtain-kiev-night-train','https://geoff.sowrey.org/1989/1989-07-03-behind-iron-curtain-trip-soviet-union-kiev-night-train'],
['/1989/07','https://geoff.sowrey.org/archives/#1989'],
['/1991/04/music-orlando-pretrip','https://geoff.sowrey.org/1991/1991-04-02-music-trip-orlando-introduction'],
['/1991/04','https://geoff.sowrey.org/archives#1991'],
['/1996/04','https://geoff.sowrey.org/archives#1996'],
['/1996/05/01/road-trip-southwest-graceland-tennessee-kentucky','https://geoff.sowrey.org/1996/1996-05-01-road-trip-southwest-united-states-graceland-memphis-tennessee-kentucky'],
['/1996/05','https://geoff.sowrey.org/archives#1996'],
['/1998/03','https://geoff.sowrey.org/archives#1998'],
['/1998/06','https://geoff.sowrey.org/archives#1998'],
['/1998/07','https://geoff.sowrey.org/archives#1998'],
['/1998/08/pacific-national-exhibition','https://geoff.sowrey.org/1998/1998-08-24-pacific-national-exhibition-pne-mom-visits'],
['/1998/08','https://geoff.sowrey.org/archives#1998'],
['/1998/09','https://geoff.sowrey.org/archives#1998'],
['/1998/10/radical-entertainment-layoffs-black-tuesday','https://geoff.sowrey.org/1998/1998-10-20-the-great-radical-entertainment-layoff-black-tuesday'],
['/1999/04','https://geoff.sowrey.org/archives/#1999'],
['/1999/05','https://geoff.sowrey.org/archives/#1999'],
['/1999/06','https://geoff.sowrey.org/archives/#1999'],
['/1999/07/royal-hudson-2860-west-coast-railway-association-skyhawks','https://geoff.sowrey.org/1999/1999-07-19-bc-rail-royal-hudson-2860-west-coast-railway-association-comox-airshow-skyhawks'],
['/1999/07','https://geoff.sowrey.org/archives/#1999'],
['/1999/08','https://geoff.sowrey.org/archives/#1999'],
['/1999/09','https://geoff.sowrey.org/archives/#1999'],
['/1999/10','https://geoff.sowrey.org/archives/#1999'],
['/1999/12','https://geoff.sowrey.org/archives/#1999'],
['/2000/01/1999-year-in-review','https://geoff.sowrey.org/2000/2000-01-01-year-review'],
['/2000/02/07/technical-writing-sucks','https://geoff.sowrey.org/2000/2000-02-07-dont-want-technical-writer-anymore'],
['/2000/02/17/leaving-girlfriend','https://geoff.sowrey.org/2000/2000-02-17-leaving-girlfriend'],
['/2000/02/calgary-friends-leaving-vancouver','https://geoff.sowrey.org/2000/2000-02-15-visiting-friends-calgary-deciding-leave-vancouver'],
['/2000/02/technical-writing-sucks','https://geoff.sowrey.org/2000/2000-02-07-dont-want-technical-writer-anymore'],
['/2000/03','https://geoff.sowrey.org/archives#2000'],
['/2000/04','https://geoff.sowrey.org/archives#2000'],
['/2000/05','https://geoff.sowrey.org/archives#2000'],
['/2000/07','https://geoff.sowrey.org/archives#2000'],
['/2000/11','https://geoff.sowrey.org/archives#2000'],
['/2000/12','https://geoff.sowrey.org/archives#2000'],
['/2001/02','https://geoff.sowrey.org/archives#2001'],
['/2001/03','https://geoff.sowrey.org/archives#2001'],
['/2001/04','https://geoff.sowrey.org/archives#2001'],
['/2001/05/calgary-myths-dispelled','https://geoff.sowrey.org/2001/2001-05-14-calgary-myths-dispelled'],
['/2001/05/vancouver-seattle-mariners-blue-jays','https://geoff.sowrey.org/2001/2001-05-08-visiting-vancouver-blue-jays-mariners-baseball-game-seattle'],
['/2001/05','https://geoff.sowrey.org/archives#2001'],
['/2001/06/04/innisfail-stag-red-deer-strippers','https://geoff.sowrey.org/2001/2001-06-04-stag-party-innisfail-strippers-red-deer'],
['/2001/06/innisfail-stag-red-deer-strippers','https://geoff.sowrey.org/2001/2001-06-04-stag-party-innisfail-strippers-red-deer'],
['/2001/06','https://geoff.sowrey.org/archives#2001'],
['/2001/07/03/steam-locomotive-cn-6060-reunion','https://geoff.sowrey.org/2001/2001-07-03-reunion-steam-locomotive-cn-6060'],
['/2001/07/steam-locomotive-cn-6060-reunion','https://geoff.sowrey.org/2001/2001-07-03-reunion-steam-locomotive-cn-6060'],
['/2001/07','https://geoff.sowrey.org/archives#2001'],
['/2001/08/critical-mass-summer-social-2001','https://geoff.sowrey.org/2001/2001-08-28-critical-mass-summer-social'],
['/2001/08/steam-frain-cn-6060-stettler-big-valley','https://geoff.sowrey.org/2001/2001-08-14-steam-train-cn-6060-stettler-big-valley'],
['/2001/09/13/mark-darla-wedding-toronto-appleby-college-hart-house','https://geoff.sowrey.org/2001/2001-09-13-mark-darla-wedding-toronto-appleby-college-hart-house'],
['/2001/09/24/inaugural-run-steam-locomotive-cpr-empress-cp-2816','https://geoff.sowrey.org/2001/2001-09-24-inaugural-run-steam-locomotive-cpr-empress-cp-2816'],
['/2001/09/inaugural-run-steam-locomotive-cpr-empress-cp-2816','https://geoff.sowrey.org/2001/2001-09-24-inaugural-run-steam-locomotive-cpr-empress-cp-2816'],
['/2001/09/mark-darla-wedding-toronto-appleby-college-hart-house','https://geoff.sowrey.org/2001/2001-09-13-mark-darla-wedding-toronto-appleby-college-hart-house'],
['/2001/09','https://geoff.sowrey.org/archives#2001'],
['/2001/10/29/cn-6060-jasper-run-red-deer-edmonton-hinton','https://geoff.sowrey.org/2001/2001-10-29-great-jasper-run-cn-6060-stettler-red-deer-edmonton-hinton-jasper'],
['/2001/10/30/tom-arnott-engineer-passing','https://geoff.sowrey.org/2001/2001-10-30-passing-engineer-tom-arnott'],
['/2001/10/cn-6060-jasper-run-red-deer-edmonton-hinton','https://geoff.sowrey.org/2001/2001-10-29-great-jasper-run-cn-6060-stettler-red-deer-edmonton-hinton-jasper'],
['/2001/10/tom-arnott-engineer-passing','https://geoff.sowrey.org/2001/2001-10-30-passing-engineer-tom-arnott'],
['/2001/11','https://geoff.sowrey.org/archives#2001'],
['/2001/12','https://geoff.sowrey.org/archives#2001'],
['/2002/01/29/father-terminal-illness','https://geoff.sowrey.org/2002/2002-01-29-coping-father-terminal-illness'],
['/2002/01','https://geoff.sowrey.org/archives#2002'],
['/2002/02/05/first-cavity/amp','https://geoff.sowrey.org/2002/2002-02-05-going-dentist-getting-first-cavity'],
['/2002/02/05/first-cavity','https://geoff.sowrey.org/2002/2002-02-05-going-dentist-getting-first-cavity'],
['/2002/02','https://geoff.sowrey.org/archives#2002'],
['/2002/03/david-charles-sowrey-eulogy','https://geoff.sowrey.org/2002/2002-03-09-eulogy-david-charles-sowrey'],
['/2002/03/david-charles-sowrey-passing','https://geoff.sowrey.org/2002/2002-03-07-death-david-charles-sowrey'],
['/2002/03','https://geoff.sowrey.org/archives#2002'],
['/2002/04','https://geoff.sowrey.org/archives#2002'],
['/2002/05/preparing-to-move-to-japan','https://geoff.sowrey.org/2002/2002-05-05-preparing-move-japan'],
['/2002/05','https://geoff.sowrey.org/archives#2002'],
['/2002/06','https://geoff.sowrey.org/archives#2002'],
['/2002/07','https://geoff.sowrey.org/archives#2002'],
['/2002/08/31/bc-rail-cariboo-prospector','https://geoff.sowrey.org/2002/2002-08-31-riding-bc-rail-cariboo-prospector'],
['/2002/08','https://geoff.sowrey.org/archives#2002'],
['/2002/09','https://geoff.sowrey.org/archives#2002'],
['/2002/10/05/cbc-tv-50th-anniversary-via-rail-train-halifax-finale','https://geoff.sowrey.org/2002/2002-10-05-cbc-tv-50th-anniversary-via-rail-train-halifax-finale'],
['/2002/10/08/via-rail-bras-dor-halifax-sydney','https://geoff.sowrey.org/2002/2002-10-08-riding-via-rail-bras-dor-halifax-sydney'],
['/2002/10/2816-super-heater-tubes','https://geoff.sowrey.org/2002/2002-10-21-fixing-super-heater-tubes-cp-2816'],
['/2002/10/via-rail-bras-dor-halifax-sydney','https://geoff.sowrey.org/2002/2002-10-08-riding-via-rail-bras-dor-halifax-sydney'],
['/2002/10/via-rail-bras-dor-sydney-halifax','https://geoff.sowrey.org/2002/2002-10-09-riding-via-rail-bras-dor-sydney-halifax'],
['/2002/10','https://geoff.sowrey.org/archives#2002'],
['/2002/11','https://geoff.sowrey.org/archives#2002'],
['/2002/12','https://geoff.sowrey.org/archives#2002'],
['/2003/03','https://geoff.sowrey.org/archives#2003'],
['/2003/04/trip-to-japan-shinkansen-mount-fuji','https://geoff.sowrey.org/2003/2003-04-29-trip-japan-shinkansen-mount-fuji'],
['/2003/05/05/trip-to-japan-imperial-palace-ueno-park','https://geoff.sowrey.org/2003/2003-05-05-trip-japan-imperial-palace-ueno-park'],
['/2003/05/trip-to-japan-imperial-palace-ueno-park','https://geoff.sowrey.org/2003/2003-05-05-trip-japan-imperial-palace-ueno-park'],
['/2003/05','https://geoff.sowrey.org/archives#2003'],
['/2003/06/25/ex-girlfriend-marries','https://geoff.sowrey.org/2003/2003-06-25-ex-girlfriend-gets-married'],
['/2003/06','https://geoff.sowrey.org/archives#2003'],
['/2003/07/27/how-to-use-a-rug-doctor','https://geoff.sowrey.org/2003/2003-07-27-how-to-use-a-rug-doctor'],
['/2003/07/how-to-use-a-rug-doctor','https://geoff.sowrey.org/2003/2003-07-27-how-to-use-a-rug-doctor'],
['/2003/09/22/critical-mass-valuable-person-award','https://geoff.sowrey.org/2003/2003-09-22-winning-critical-mass-valuable-person-award'],
['/2003/09/critical-mass-valuable-person-award','https://geoff.sowrey.org/2003/2003-09-22-winning-critical-mass-valuable-person-award'],
['/2003/10','https://geoff.sowrey.org/archives#2003'],
['/2003/11/eric-idle-greedy-bastard-tour-calgary','https://geoff.sowrey.org/2003/2003-11-29-eric-idle-greedy-bastard-tour-hits-calgary'],
['/2003/11','https://geoff.sowrey.org/archives#2003'],
['/2003/12/26/calgary-christmas-boxing-day-2003','https://geoff.sowrey.org/2003/2003-12-26-christmas-day-boxing-day-calgary'],
['/2003/12/calgary-christmas-boxing-day-2003','https://geoff.sowrey.org/2003/2003-12-26-christmas-day-boxing-day-calgary'],
['/2003/12','https://geoff.sowrey.org/archives#2003'],
['/2004/01/22/david-bowie-calgary-saddledome','https://geoff.sowrey.org/2004/2004-01-22-david-bowie-plays-calgary-saddledome'],
['/2004/01/david-bowie-calgary-saddledome','https://geoff.sowrey.org/2004/2004-01-22-david-bowie-plays-calgary-saddledome'],
['/2004/01','https://geoff.sowrey.org/archives#2004'],
['/2004/02/23/via-train-from-montreal-to-toronto','https://geoff.sowrey.org/2004/2004-02-23-via-train-montreal-toronto'],
['/2004/02','https://geoff.sowrey.org/archives#2004'],
['/2004/04/19/curling-first-time','https://geoff.sowrey.org/2004/2004-04-19-going-curling-first-time'],
['/2004/04/27/how-to-throw-a-surprise-party-and-not-get-caught','https://geoff.sowrey.org/2004/2004-04-27-how-throw-a-surprise-party-and-not-get-caught'],
['/2004/04/curling-first-time','https://geoff.sowrey.org/2004/2004-04-19-going-curling-first-time'],
['/2004/04/how-to-throw-a-surprise-party-and-not-get-caught','https://geoff.sowrey.org/2004/2004-04-27-how-throw-a-surprise-party-and-not-get-caught'],
['/2004/04','https://geoff.sowrey.org/archives#2004'],
['/2004/05/04/calgary-flames-stanley-cup-2004','https://geoff.sowrey.org/2004/2004-05-04-calgary-flames-2004-stanley-cup'],
['/2004/05/calgary-flames-stanley-cup-2004','https://geoff.sowrey.org/2004/2004-05-04-calgary-flames-2004-stanley-cup'],
['/2004/06/04/the-red-mile','https://geoff.sowrey.org/2004/2004-06-04-red-mile'],
['/2004/06/the-red-mile','https://geoff.sowrey.org/2004/2004-06-04-red-mile'],
['/2004/07','https://geoff.sowrey.org/archives#2004'],
['/2004/08/luke-leaves-critical-mass','https://geoff.sowrey.org/2004/2004-08-14-luke-leaves-critical-mass'],
['/2004/10/thelton-mcmillan-leaves-critical-mass','https://geoff.sowrey.org/2004/2004-10-15-thelton-mcmillan-leaves-critical-mass'],
['/2004/12','https://geoff.sowrey.org/archives#2004'],
['/2005/05/hiking-the-great-wall-of-china','https://geoff.sowrey.org/2005/2005-05-30-hiking-great-wall-china'],
['/2005/06/18/nara-is-neat','https://geoff.sowrey.org/2005/2005-06-18-nara-neat'],
['/2005/06','https://geoff.sowrey.org/archives#2005'],
['/2005/07','https://geoff.sowrey.org/archives#2005'],
['/2006/01/2005-year-in-review','https://geoff.sowrey.org/2006/2006-01-02-2005-year-review'],
['/2006/01','https://geoff.sowrey.org/archives#2006'],
['/2006/02/cmmy-2005','https://geoff.sowrey.org/2006/2006-02-17-day-after-cmmys'],
['/2006/02/reform-the-us-patent-office','https://geoff.sowrey.org/2006/2006-02-22-reform-us-patent-office'],
['/2006/03','https://geoff.sowrey.org/archives#2006'],
['/2006/04/stuart-mclean-and-vinyl-cafe-come-to-banff','https://geoff.sowrey.org/2006/2006-04-12-stuart-mclean-and-vinyl-cafe-come-banff'],
['/2006/05/23/meeting-my-niece-for-the-first-time','https://geoff.sowrey.org/2006/2006-05-23-meeting-my-niece-first-time'],
['/2006/05/meeting-my-niece-for-the-first-time','https://geoff.sowrey.org/2006/2006-05-23-meeting-my-niece-first-time'],
['/2006/06','https://geoff.sowrey.org/archives#2006'],
['/2006/07','https://geoff.sowrey.org/archives#2006'],
['/2006/08/15/calgary-transit-sucks','https://geoff.sowrey.org/2006/2006-08-15-calgary-transit-sucks'],
['/2006/08/calgary-transit-sucks','https://geoff.sowrey.org/2006/2006-08-15-calgary-transit-sucks'],
['/2006/08','https://geoff.sowrey.org/archives#2006'],
['/2006/09','https://geoff.sowrey.org/archives#2006'],
['/2006/12/the-critical-mass-new-york-extravaganza-2006','https://geoff.sowrey.org/2006/2006-12-09-critical-mass-new-york-extravaganza'],
['/2006/12','https://geoff.sowrey.org/archives#2006'],
['/2007/01/i-need-a-new-watch','https://geoff.sowrey.org/2007/2007-01-15-i-need-new-watch'],
['/2007/01','https://geoff.sowrey.org/archives#2007'],
['/2007/02/11/air-canada-sucks','https://geoff.sowrey.org/2007/2007-02-11-air-canada-sucks'],
['/2007/02/air-canada-sucks','https://geoff.sowrey.org/2007/2007-02-11-air-canada-sucks'],
['/2007/02/complementing-and-enhancing-search-engine-optimization-seo-using-reddot-cms-summit-2007','https://geoff.sowrey.org/2007/2007-02-13-complementing-enhancing-search-engine-optmization-(seo)-using-reddot-cms-summit'],
['/2007/02/solve-the-challenges-of-social-computing-with-reddot-at-summit-2007','https://geoff.sowrey.org/2007/2007-02-13-solve-challenges-social-computing-with-reddot-summit'],
['/2007/03/16/critical-mass-cmmys-2007','https://geoff.sowrey.org/2007/2007-03-16-critical-mass-cmmys'],
['/2007/03/critical-mass-cmmys-2007','https://geoff.sowrey.org/2007/2007-03-16-critical-mass-cmmys'],
['/2007/04','https://geoff.sowrey.org/archives#2007'],
['/2007/05','https://geoff.sowrey.org/archives#2007'],
['/2007/06/plates-in-first-framing-up','https://geoff.sowrey.org/2007/2007-06-26-plates-in-first-framing-up'],
['/2007/06','https://geoff.sowrey.org/archives#2007'],
['/2007/07/what-is-inside-a-50-year-old-furnace','https://geoff.sowrey.org/2007/2007-07-02-what-inside-50-year-old-furnace'],
['/2007/07','https://geoff.sowrey.org/archives#2007'],
['/2007/08/02/car-seats-for-smaller-cars-please','https://geoff.sowrey.org/2007/2007-08-02-car-seats-smaller-cars-please'],
['/2007/09','https://geoff.sowrey.org/archives#2007'],
['/2007/10/11/i-hate-microsoft-word','https://geoff.sowrey.org/2007/2007-10-11-i-hate-microsoft-word'],
['/2007/10/31/i-was-benno','https://geoff.sowrey.org/2007/2007-10-31-i-was-benno'],
['/2007/10/i-hate-microsoft-word','https://geoff.sowrey.org/2007/2007-10-11-i-hate-microsoft-word'],
['/2007/10','https://geoff.sowrey.org/archives#2007'],
['/2007/11/14/bank-of-montreal-i-hate-your-security','https://geoff.sowrey.org/2007/2007-11-14-bank-montreal-i-hate-your-security'],
['/2007/11/27/laminate-flooring-sucks','https://geoff.sowrey.org/2007/2007-11-27-laminate-flooring-sucks'],
['/2007/11/bank-of-montreal-i-hate-your-security','https://geoff.sowrey.org/2007/2007-11-14-bank-montreal-i-hate-your-security'],
['/2007/11/laminate-flooring-sucks','https://geoff.sowrey.org/2007/2007-11-27-laminate-flooring-sucks'],
['/2007/11','https://geoff.sowrey.org/archives#2007'],
['/2007/12/06/the-dirty-jobs-drinking-game','https://geoff.sowrey.org/2007/2007-12-06-dirty-jobs-drinking-game'],
['/2007/12/31/bmo-locked-me-out-again','https://geoff.sowrey.org/2007/2007-12-31-bmo-locked-me-out-again'],
['/2007/12/bmo-locked-me-out-again','https://geoff.sowrey.org/2007/2007-12-31-bmo-locked-me-out-again'],
['/2007/12/the-dirty-jobs-drinking-game','https://geoff.sowrey.org/2007/2007-12-06-dirty-jobs-drinking-game'],
['/2008/01','https://geoff.sowrey.org/archives#2008'],
['/2008/04/01/i-have-a-steak-hangover','https://geoff.sowrey.org/2008/2008-04-01-i-have-steak-hangover'],
['/2008/04','https://geoff.sowrey.org/archives#2008'],
['/2008/05','https://geoff.sowrey.org/archives#2008'],
['/2008/06/04/getting-my-birth-certificate-shouldnt-be-this-hard','https://geoff.sowrey.org/2008/2008-06-04-getting-my-birth-certificate-shouldnt-be-this-hard'],
['/2008/06/16/how-to-bring-a-pet-into-costa-rica-simplified','https://geoff.sowrey.org/2008/2008-06-16-how-bring-pet-into-costa-rica-simplified'],
['/2008/06/getting-my-birth-certificate-shouldnt-be-this-hard','https://geoff.sowrey.org/2008/2008-06-04-getting-my-birth-certificate-shouldnt-be-this-hard'],
['/2008/06/how-to-bring-a-pet-into-costa-rica-simplified','https://geoff.sowrey.org/2008/2008-06-16-how-bring-pet-into-costa-rica-simplified'],
['/2008/06/starting-life-in-costa-rica','https://geoff.sowrey.org/2008/2008-06-17-starting-life-costa-rica'],
['/2008/07/23/rip-sean-lineham','https://geoff.sowrey.org/2008/2008-07-23-rip-sean-lineham'],
['/2008/07/rip-sean-lineham','https://geoff.sowrey.org/2008/2008-07-23-rip-sean-lineham'],
['/2008/07','https://geoff.sowrey.org/archives#2008'],
['/2008/08/14/u-turns-are-illegal-in-costa-rica','https://geoff.sowrey.org/2008/2008-08-14-u-turns-are-illegal-costa-rica'],
['/2008/09/14-things-i-love-about-costa-rica','https://geoff.sowrey.org/2008/2008-09-23-14-things-i-love-about-costa-rica'],
['/2008/09/17-things-i-hate-about-costa-rica','https://geoff.sowrey.org/2008/2008-09-23-17-things-i-hate-about-costa-rica'],
['/2008/09/23/17-things-i-hate-about-costa-rica','https://geoff.sowrey.org/2008/2008-09-23-17-things-i-hate-about-costa-rica'],
['/2008/09/23/actually-make-that-18-things','https://geoff.sowrey.org/2008/2008-09-23-actually-make-that-18-things'],
['/2008/09/actually-make-that-18-things','https://geoff.sowrey.org/2008/2008-09-23-actually-make-that-18-things'],
['/2008/09/dear-canada-im-going-to-break-the-law','https://geoff.sowrey.org/2008/2008-09-21-dear-canada-im-going-break-law'],
['/2008/09','https://geoff.sowrey.org/archives#2008'],
['/2008/10/blog-or-die','https://geoff.sowrey.org/2008/2008-10-31-blog-or-die'],
['/2008/10/san-jose-airport-is-no-fun-after-2000','https://geoff.sowrey.org/2008/2008-10-03-san-jose-airport-no-fun'],
['/2008/11','https://geoff.sowrey.org/archives#2008'],
['/2008/12','https://geoff.sowrey.org/archives#2008'],
['/2009/02','https://geoff.sowrey.org/archives#2009'],
['/2009/03','https://geoff.sowrey.org/archives#2009'],
['/2009/04/12/repetition-breeds-complacency','https://geoff.sowrey.org/2009/2009-04-12-repetition-breeds-complacency/archives#2009'],
['/2009/04/21/why-didnt-i-get-a-promotion','https://geoff.sowrey.org/2009/2009-04-21-why-didnt-i-get-promotion'],
['/2009/04/repetition-breeds-complacency','https://geoff.sowrey.org/2009/2009-04-12-repetition-breeds-complacency'],
['/2009/04/why-didnt-i-get-a-promotion','https://geoff.sowrey.org/2009/2009-04-21-why-didnt-i-get-promotion'],
['/2009/04','https://geoff.sowrey.org/archives#2009'],
['/2009/05/05/the-blinding-effect-of-an-ego','https://geoff.sowrey.org/2009/2009-05-05-blinding-effect-ego'],
['/2009/06/24/the-power-of-word-in-outlook','https://geoff.sowrey.org/2009/2009-06-24-power-word-outlook'],
['/2009/07/30/canadian-citizenship-questions-are-kinda-funny','https://geoff.sowrey.org/2009/2009-07-30-canadian-citizenship-questions-are-kinda-funny'],
['/2009/09/a-good-programmer-is-lazy-not-stupid','https://geoff.sowrey.org/2009/2009-09-24-good-programmer-lazy-not-stupid'],
['/2009/09','https://geoff.sowrey.org/archives#2009'],
['/2009/11/overtime-is-not-a-solution','https://geoff.sowrey.org/2009/2009-11-12-overtime-not-solution'],
['/2009/11','https://geoff.sowrey.org/archives#2009'],
['/2009/12/the-trip-home','https://geoff.sowrey.org/2009/2009-12-10-trip-home'],
['/2009/12','https://geoff.sowrey.org/archives#2009'],
['/2010/02/07/evolution-of-the-know-it-all/know-it-all-curve','https://geoff.sowrey.org/2010/2010-02-07-evolution-know-it-all'],
['/2010/02/11/what-makes-a-senior-developer','https://geoff.sowrey.org/2010/2010-02-11-what-makes-senior-developer'],
['/2010/02/18/dealing-with-kell-antigens','https://geoff.sowrey.org/2010/2010-02-18-dealing-with-kell-antigens'],
['/2010/02/22/kell-antigen-update','https://geoff.sowrey.org/2010/2010-02-22-kell-antigen-update'],
['/2010/02/dealing-with-kell-antigens','https://geoff.sowrey.org/2010/2010-02-18-dealing-with-kell-antigens'],
['/2010/02/what-makes-a-senior-developer','https://geoff.sowrey.org/2010/2010-02-11-what-makes-senior-developer'],
['/2010/03/02/its-complicated','https://geoff.sowrey.org/2010/2010-03-02-its-complicated'],
['/2010/03/03/12-things-i-miss-about-costa-rica','https://geoff.sowrey.org/2010/2010-03-03-12-things-i-miss-about-costa-rica'],
['/2010/03/12-things-i-miss-about-costa-rica','https://geoff.sowrey.org/2010/2010-03-03-12-things-i-miss-about-costa-rica'],
['/2010/03/18/arrived-choo-choo','https://geoff.sowrey.org/2010/2010-03-18-arrived-choo-choo'],
['/2010/03/i-believe','https://geoff.sowrey.org/2010/2010-03-01-i-believe'],
['/2010/06/visit-calgary-youre-very-welcome','https://geoff.sowrey.org/2010/2010-06-09-visit-calgary-youre-very-welcome'],
['/2010/07/16/happy-birthzap-to-me','https://geoff.sowrey.org/2010/2010-07-16-happy-birthzap-me'],
['/2010/07','https://geoff.sowrey.org/archives#2010'],
['/2010/09/06/the-end-of-summer-vacation','https://geoff.sowrey.org/2010/2010-09-06-end-summer-vacation'],
['/2010/09','https://geoff.sowrey.org/archives#2009'],
['/2010/10/13/switching-from-shaw-to-telus','https://geoff.sowrey.org/2010/2010-10-13-switching-from-shaw-telus'],
['/2010/10/switching-from-shaw-to-telus','https://geoff.sowrey.org/2010/2010-10-13-switching-from-shaw-telus'],
['/2010/10/the-development-in-my-life','https://geoff.sowrey.org/2010/2010-10-13-development-my-life'],
['/2010/12/08/a-year-in-canada','https://geoff.sowrey.org/2010/2010-12-08-year-canada'],
['/2010/12/19/our-last-day-at-the-calgary-farmers-market','https://geoff.sowrey.org/2010/2010-12-19-our-last-day-at-calgary-farmers-market'],
['/2010/12','https://geoff.sowrey.org/archives#2010'],
['/2011/01/new-years-tea-2011','https://geoff.sowrey.org/2011/2011-01-01-new-years-tea'],
['/2011/02','https://geoff.sowrey.org/archives#2011'],
['/2011/04/16/my-first-surgery','https://geoff.sowrey.org/2011/2011-04-16-my-first-surgery'],
['/2011/04/my-first-surgery','https://geoff.sowrey.org/2011/2011-04-16-my-first-surgery'],
['/2011/05/the-need-for-the-big-picture','https://geoff.sowrey.org/2011/2011-05-30-need-big-picture'],
['/2011/07','https://geoff.sowrey.org/archives#2011'],
['/2011/08','https://geoff.sowrey.org/archives#2011'],
['/2011/11/the-annual-review','https://geoff.sowrey.org/2011/2011-11-01-annual-review'],
['/2011/11','https://geoff.sowrey.org/archives#2011'],
['/2011/12/merry-christmas-2011','https://geoff.sowrey.org/2011/2011-12-25-merry-christmas-2011'],
['/2012/01','https://geoff.sowrey.org/archives#2012'],
['/2012/02','https://geoff.sowrey.org/archives#2012'],
['/2012/04/renovating-a-word-on-led-lighting','https://geoff.sowrey.org/2012/2012-04-09-renovating-word-led-lighting'],
['/2012/05/05/appendix-to-appendicitis','https://geoff.sowrey.org/2012/2012-05-05-appendix-appendicitis'],
['/2012/07','https://geoff.sowrey.org/archives#2012'],
['/2012/08','https://geoff.sowrey.org/archives#2012'],
['/2012/11/votes-dont-split-justin-trudeau','https://geoff.sowrey.org/2012/2012-11-26-votes-dont-split-justin-trudeau'],
['/2012/12','https://geoff.sowrey.org/archives#2012'],
['/2013/02','https://geoff.sowrey.org/archives#2013'],
['/2013/03/happy-3rd-birthday-choo-choo','https://geoff.sowrey.org/2013/2013-03-18-happy-3rd-birthday-choo-choo'],
['/2013/10/20/making-hibiscus-mead','https://geoff.sowrey.org/2013/2013-10-20-making-hibiscus-mead'],
['/2013/10/an-open-letter-to-nest-labs-please-dont-outsource-your-support','https://geoff.sowrey.org/2013/2013-10-09-open-letter-nest-labs-please-dont-outsource-your-support'],
['/2013/10/calgary-board-of-education-we-need-a-decision-on-westgate-elementary','https://geoff.sowrey.org/2013/2013-10-09-calgary-board-of-education-we-need-decision-westgate-elementary'],
['/2013/10/making-hibiscus-mead','https://geoff.sowrey.org/2013/2013-10-20-making-hibiscus-mead'],
['/2013/12','https://geoff.sowrey.org/archives#2013'],
['/2014/03','https://geoff.sowrey.org/archives#2014'],
['/2014/04/so-i-wrote-a-book','https://geoff.sowrey.org/2014/2014-04-21-so-i-wrote-book'],
['/2014/06','https://geoff.sowrey.org/archives#2014'],
['/2015/03/20-years-a-web-developer','https://geoff.sowrey.org/2015/2015-03-20-20-years-web-developer'],
['/2015/03/happy-5th-birthday-choo-choo','https://geoff.sowrey.org/2015/2015-03-18-happy-5th-birthday-choo-choo'],
['/2015/04/21/how-to-fix-the-calgary-board-of-education','https://geoff.sowrey.org/2015/2015-04-21-how-fix-calgary-board-education'],
['/2015/04/how-to-fix-the-calgary-board-of-education','https://geoff.sowrey.org/2015/2015-04-21-how-fix-calgary-board-education'],
['/2015/12/23/rudolph-red-nosed-genetically-altered-reindeer-subspecies','https://geoff.sowrey.org/2015/2015-12-23-rudolph-red-nosed-genetically-altered-reindeer-subspecies'],
['/2015/12/rudolph-red-nosed-genetically-altered-reindeer-subspecies','https://geoff.sowrey.org/2015/2015-12-23-rudolph-red-nosed-genetically-altered-reindeer-subspecies'],
['/2016/02','https://geoff.sowrey.org/archives#2016'],
['/2016/07/my-hip-stories','https://geoff.sowrey.org/2016/2016-07-30-my-hip-stories'],
['/2016/12/19/disney-world-2016-epcot','https://geoff.sowrey.org/2016/2016-12-19-florida-epcot'],
['/2016/12/disney-world-2016-animal-kingdom','https://geoff.sowrey.org/2016/2016-12-22-florida-animal-kingdom'],
['/2016/12/disney-world-2016-epcot','https://geoff.sowrey.org/2016/2016-12-19-florida-epcot'],
['/2016/12/disney-world-2016-kennedy-space-center','https://geoff.sowrey.org/2016/2016-12-21-florida-kennedy-space-center'],
['/2016/12/disney-world-2016-magic-kingdom','https://geoff.sowrey.org/2016/2016-12-23-florida-magic-kingdom'],
['/2016/12/disney-world-2016-resting-at-the-resort','https://geoff.sowrey.org/2016/2016-12-20-florida-resting-resort'],
['/2016/12/disney-world-2016-twas-the-day-before-christmas','https://geoff.sowrey.org/2016/2016-12-24-florida-twas-day-before-christmas'],
['/2016/12','https://geoff.sowrey.org/archives#2016'],
['/2017/01/15/things-i-learned-by-leaving-social-media','https://geoff.sowrey.org/2017/2017-01-15-things-i-learned-leaving-social-media'],
['/2017/01/22/why-calling-people-cowboys-is-wrong','https://geoff.sowrey.org/2017/2017-01-22-why-calling-people-cowboys-wrong'],
['/2017/01/why-calling-people-cowboys-is-wrong','https://geoff.sowrey.org/2017/2017-01-22-why-calling-people-cowboys-wrong'],
['/2017/08/10-years-a-monkey','https://geoff.sowrey.org/2017/2017-08-22-10-years-monkey'],
['/2017/08/19/marketing-is-common-sense','https://geoff.sowrey.org/2017/2017-08-19-marketing-common-sense'],
['/2017/08/22/10-years-a-monkey','https://geoff.sowrey.org/2017/2017-08-22-10-years-monkey'],
['/2017/08','https://geoff.sowrey.org/archives#2017'],
['/2018/01/01/the-kids-first-new-years-eve','https://geoff.sowrey.org/2018/2018-01-01-kids-first-new-years-eve'],
['/2018/01/06/20-years-from-ontario','https://geoff.sowrey.org/2018/2018-01-06-20-years-from-ontario'],
['/2018/01/12/the-last-tooth-has-been-lost','https://geoff.sowrey.org/2018/2018-01-12-last-tooth-lost'],
['/2018/01/20-years-from-ontario','https://geoff.sowrey.org/2018/2018-01-06-20-years-from-ontario'],
['/2018/01/27/a-wintery-drive-to-drumheller','https://geoff.sowrey.org/2018/2018-01-27-wintery-drive-drumheller'],
['/2018/01/a-wintery-drive-to-drumheller','https://geoff.sowrey.org/2018/2018-01-27-wintery-drive-drumheller'],
['/2018/01/the-kids-first-new-years-eve','https://geoff.sowrey.org/2018/2018-01-01-kids-first-new-years-eve'],
['/2018/01/the-last-tooth-has-been-lost','https://geoff.sowrey.org/2018/2018-01-12-last-tooth-lost'],
['/2018/01','https://geoff.sowrey.org/archives#2018'],
['/2018/02/01/the-importance-of-experience','https://geoff.sowrey.org/2018/2018-02-01-importance-experience'],
['/2018/02/03/a-farewell-to-neighbours','https://geoff.sowrey.org/2018/2018-02-03-farewell-neighbours'],
['/2018/02/03/she-choo-choo-choosed-me','https://geoff.sowrey.org/2018/2018-02-03-she-choo-choo-choosed-me'],
['/2018/02/12/dispelling-a-myth-of-centralized-it','https://geoff.sowrey.org/2018/2018-02-12-dispelling-myth-centralized-it'],
['/2018/02/14/why-your-manager-sucks','https://geoff.sowrey.org/2018/2018-02-14-why-your-manager-sucks'],
['/2018/02/a-farewell-to-neighbours','https://geoff.sowrey.org/2018/2018-02-03-farewell-neighbours'],
['/2018/02/dispelling-a-myth-of-centralized-it','https://geoff.sowrey.org/2018/2018-02-14-why-your-manager-sucks'],
['/2018/02/she-choo-choo-choosed-me','https://geoff.sowrey.org/2018/2018-02-03-she-choo-choo-choosed-me'],
['/2018/02/the-importance-of-experience','https://geoff.sowrey.org/2018/2018-02-01-importance-experience'],
['/2018/02/why-your-manager-sucks','https://geoff.sowrey.org'],
['/2018/02','https://geoff.sowrey.org/archives#2018'],
['/2019/12/10-years-in-canada','https://geoff.sowrey.org/2019/2019-12-10-10-years-canada'],
['/2019/12','https://geoff.sowrey.org/archives#2019'],
['/2020/01/the-story-is-key','https://geoff.sowrey.org/2020/2020-01-12-story-key'],
['/2020/01','https://geoff.sowrey.org/archives#2020'],
['/2020/03/healthy-10th-birthday-choo-choo','https://geoff.sowrey.org/2020/2020-03-18-healthy-10th-birthday-choo-choo'],
['/2020/03/how-to-work-remotely','https://geoff.sowrey.org/2020/2020-03-28-how-work-remotely'],
['/2020/03','https://geoff.sowrey.org/archives#2020'],
['/2020/11/society-is-dead-long-live-liberty','https://geoff.sowrey.org/2020/2020-11-03-society-dead-long-live-liberty'],
['/2020/11','https://geoff.sowrey.org/archives#2020'],
['/about/resume','https://linkedin.com/in/sowrey'],
['/about','https://geoff.sowrey.org/about/'],
['/category/careers','https://geoff.sowrey.org/topics/career.html'],
['/category/christmas','https://geoff.sowrey.org/topics/christmas.html'],
['/category/costa-rica','https://geoff.sowrey.org/topics/costa-rica.html'],
['/category/drama','https://geoff.sowrey.org/topics/'],
['/category/family','https://geoff.sowrey.org/topics/family.html'],
['/category/general','https://geoff.sowrey.org/topics/'],
['/category/photo-essay','https://geoff.sowrey.org/topics/pictures.html'],
['/category/photography','https://geoff.sowrey.org/topics/pictures.html'],
['/category/pop-culture','https://geoff.sowrey.org/topics/pop-culture.html'],
['/category/rants','https://geoff.sowrey.org/topics/rants.html'],
['/category/renovations','https://geoff.sowrey.org/topics/renovations.html'],
['/category/technology','https://geoff.sowrey.org/topics/technology.html'],
['/category/trains','https://geoff.sowrey.org/topics/trains.html'],
['/category/travel','https://geoff.sowrey.org/topics/travel.html'],
['/photos/*','https://geoff.sowrey.org/topics/pictures.html'],
['/tag/banff','https://geoff.sowrey.org/topics/banff.html'],
['/tag/birthday','https://geoff.sowrey.org/topics/birthday.html'],
['/tag/blogging','https://geoff.sowrey.org/topics/writing.html'],
['/tag/calgary','https://geoff.sowrey.org/topics/calgary.html'],
['/tag/canada','https://geoff.sowrey.org/topics/canada.html'],
['/tag/cats','https://geoff.sowrey.org/topics/pets.html'],
['/tag/cbc-tv-50th-anniversary-via-rail-train','https://geoff.sowrey.org/topics/cbc.html'],
['/tag/cn-6060','https://geoff.sowrey.org/topics/cn-6060.html'],
['/tag/cp-2816','https://geoff.sowrey.org/topics/cp-2816.html'],
['/tag/dearmonkey','https://geoff.sowrey.org/topics/dear-monkey.html'],
['/tag/fireworks','https://geoff.sowrey.org/topics/fireworks.html'],
['/tag/health','https://geoff.sowrey.org/topics/health.html'],
['/tag/hot-springs','https://geoff.sowrey.org/topics/'],
['/tag/internet','https://geoff.sowrey.org/topics/digital.html'],
['/tag/management','https://geoff.sowrey.org/topics/management.html'],
['/tag/marketing','https://geoff.sowrey.org/topics/marketing.html'],
['/tag/mead','https://geoff.sowrey.org/topics/'],
['/tag/montage','https://geoff.sowrey.org/topics/'],
['/tag/moving','https://geoff.sowrey.org/topics/moving.html'],
['/tag/new-years-eve','https://geoff.sowrey.org/topics/new-years-eve.html'],
['/tag/new-years-tea','https://geoff.sowrey.org/topics/'],
['/tag/offshoring','https://geoff.sowrey.org/topics/offshoring.html'],
['/tag/ontario','https://geoff.sowrey.org/topics/ontario.html'],
['/tag/politics','https://geoff.sowrey.org/topics/politics.html'],
['/tag/southwest-1996','https://geoff.sowrey.org/archives#1996'],
['/tag/soviet-union','https://geoff.sowrey.org/topics/soviet-union.html'],
['/tag/surprise','https://geoff.sowrey.org/topics/surprise.html'],
['/tag/vancouver','https://geoff.sowrey.org/topics/vancouver.html'],
['/tag/wildlife','https://geoff.sowrey.org/topics/fauna.html'],
['/tag/work-in-progress','https://geoff.sowrey.org/topics/'],
['/tag/writing','https://geoff.sowrey.org/topics/writing.html'],
])

addEventListener('fetch', event => {
  try {
    event.respondWith(handleEvent(event))
  } catch (e) {
    if (DEBUG) {
      return event.respondWith(
        new Response(e.message || e.toString(), {
          status: 500,
        }),
      )
    }
    event.respondWith(new Response('Internal Error', { status: 500 }))
  }
})

async function handleEvent(event) {
  const url = new URL(event.request.url)
  let options = {}

  url.pathname.replace(/\/$/, "")
  const location = redirectMap.get(url.pathname)

  if (url.hostname.includes("www")) {
    location = "https://sowrey.org" + url.pathname;
  }
  
  if (location) {
    return Response.redirect(location, 301)
  }

  /**
   * You can add custom logic to how we fetch your assets
   * by configuring the function `mapRequestToAsset`
   */
  // options.mapRequestToAsset = handlePrefix(/^\/docs/)

  try {
    if (DEBUG) {
      // customize caching
      options.cacheControl = {
        bypassCache: true,
      };
    }
    const page = await getAssetFromKV(event, options);

    // allow headers to be altered
    const response = new Response(page.body, page);

    response.headers.set("X-XSS-Protection", "1; mode=block");
    response.headers.set("X-Content-Type-Options", "nosniff");
    response.headers.set("X-Frame-Options", "DENY");
    response.headers.set("Referrer-Policy", "unsafe-url");
    response.headers.set("Feature-Policy", "none");

    return response;

  } catch (e) {
    // if an error is thrown try to serve the asset at 404.html
    if (!DEBUG) {
      try {
        let notFoundResponse = await getAssetFromKV(event, {
          mapRequestToAsset: req => new Request(`${new URL(req.url).origin}/404.html`, req),
        })

        return new Response(notFoundResponse.body, { ...notFoundResponse, status: 404 })
      } catch (e) {}
    }

    return new Response(e.message || e.toString(), { status: 500 })
  }
}

/**
 * Here's one example of how to modify a request to
 * remove a specific prefix, in this case `/docs` from
 * the url. This can be useful if you are deploying to a
 * route on a zone, or if you only want your static content
 * to exist at a specific path.
 */
function handlePrefix(prefix) {
  return request => {
    // compute the default (e.g. / -> index.html)
    let defaultAssetKey = mapRequestToAsset(request)
    let url = new URL(defaultAssetKey.url)

    // strip the prefix from the path for lookup
    url.pathname = url.pathname.replace(prefix, '/')

    // inherit all other props from the default request
    return new Request(url.toString(), defaultAssetKey)
  }
}
