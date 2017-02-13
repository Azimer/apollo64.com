<?php include('apollo_head.htm'); ?>
<TABLE border="0" cellpadding="10" cellspacing="0" width="475">
<TR>
  <TD align="left" valign="top">
<FONT size="2"><I><B>6:15 AM 12/27/2002:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
I've been working on my LLE Audio plugin and a little bit of Graphics lately.  I am attemping to
get the LLE Audio plugin to sync at 60 FPS.  I have been somewhat successful, but I now find myself
in a bind...  I have learned SO MUCH about how to get the Audio to sync in the last couple of days
just from trial and error.  It almost looks as if I need to rewrite it AGAIN!  LMFAO.  I don't think
so.  I will just go with this until I figure more stuff out.  The way I do buffering is the speedy
way.  That is not necessarily the best way.  I also thinking about ditching the remixing/resampling
of audio.  It is much better just to attempt to sync the framerate at 60 FPS or even 59.5 such that the
Emulator can keep the limiter on without messing with the audio sync.  Now about graphics.  I did manage
to talk to someone about LLE Graphics.  I have become even more confused.  I wonder why it appears the RSP
updated the DP END register after it adds a command.  My theory, is that it does this to allow the RDP
to process the list while the RSP is running.  I have some ideas...
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>1:27 AM 12/26/2002:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
I am starting work on a new audio code revision.  Though may people in the past have wondered
why I never used remixing for audio samples.  That was a very good question.  A lot of the
problem from N64 games is that the audio will tend to underrun or overrun the buffer.  If I can
cause the rom to resample the data so the buffer is a perfect fit, there should be no more
popping and crackling.  The hinderance is on speed however.  This will take some time and it is
in some aspect being done more then it has to.  In HLE Audio, the stream gets resampled anyway.
So to resample it for N64 frequency and then again for PC frequency seems counter productive.
The frequencies may also not be correct.  This will be a flaw with the audio emulation.  I really
need to get together with schibo to fix this in 1964.  Otherwise, I feel I will have to make
Apollo a guini pig again.  The problem with doing it in my own emulator is that no one else gets
to use my work other then myself.  We will see...  WIP for sure.
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>6:42 PM 11/08/2001:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
This post will be short.  It works now: 
<a href="http://apollo.emulation64.com/conk.jpg" target="_BLANK">1</a> 
<a href="http://apollo.emulation64.com/conk2.jpg" target="_BLANK">2</a>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>2:55 AM 11/1/2001</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
I've been pulling all-nighters lately working on my project.  I am pleased to say
most of my rom collecting is being emulated.  A few key roms which fail are Conker,
Banjo Tooie, Indiana Jones, and Mario Party (I think MP is a bad dump).  I fixed the
problem I had with F-Zero X.  I learned this rom had a provision to use the N64DD
but this was never released. (obviously).  This caused problems for emulating the
8MB Expansion Pak.  I inserted a hack to make Yoshi Story work.  You can see a
screen shot of it <a href="http://apollo.emulation64.com/yoshi.jpg" target="_blank">here</a>.  The
ingame graphics are not present.  Neither are the menu graphics. :)  I still need
to reverse the game and find why I need the hack in the first place.  I also
put in a hack to make A Bug's Life work.  I HATE hacks.  I will be thrilled when
I can remove both those.  What else can I mention...  Golden Eye no longer need
the hack to function.  My TLB is rock solid now.  There is a sorrowful thing to mention
however.  In the process of fixing more roms, I broke all progress I had with Banjo
Tooie.  It got to the point where it was producing many audio lists.  Unfortunately,
I didn't catch this detail until I backed up the source.  By then, my previous backup
was overwritten.  Not a big deal since I have many more positive things to say.  As
far as the broken roms, Conker needs a better FPU.  Indiana, I haven't a clue, but
I have a hunch it's either FPU or out of my hands (plugin related).  Tooie... no clue.
But those are the last I have to emulate.  Now for Apollo's future?  I am starting to
work slowly on a Dynarec.  I considered having RatTrap make a release soon, but the
interpretive isn't worth the time to make it releasable.  It's WAY too slow on my
1.4Ghz machine.  This is likely my last devlog update until something major happens
like Conker or Tooie work.  ciao.
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>4:17 PM 10/28/2001:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
Fixed a couple bugs which occurred during initialization.
<a href="http://apollo.emulation64.com/pd.jpg" target="_BLANK">Perfect Dark</a> works.  
I wish I knew why some of the others
don't work. :)  Oh well.  I will take progress whereever I can find it!
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>1:43 PM 10/28/2001:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
Logically, something like this would go on the front page... but since it started here, I will continue it here. 
I just want to apologize for updating the devlog and having it posted on news sites.  It was not my intention 
to have people believe Apollo has suddenly become public.  I do have a set of beta testers and some fans of 
the project (though few), and for those people is why I've been updating.  Please please please don't expect 
a release.  I don't want to hype my progress. If you really are a true fan, I might get around to resurrecting 
my Beta mailing list.  I will provide more details on the front page if it happens.  Sorry for wasting space 
in this devlog without having devnews. It sounds lame enough to be featured on 
<a href="http://www.kinox.org/emu-lmao/" target="_BLANK">EMU-LMAO</a> (I love that site). :p
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>1:55 PM 10/27/2001:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
Wow... two updates in less then a week. :)  I am on the ball.  I fixed my problem with Killer Instinct
Gold.  It works 100% now with graphics (no more black sprites).  It also allowed BomberMan64 to work, so
I am pretty happy with the games that work vs the games that don't now.
I bugs were two major CPU bugs which were left over from FlashRAM.  One prevented TLB'd memory addresses 
from being written to (I don't know how this got in there), and the other one prevented the latest 
exception EPC from being used.  This last bug was a very odd one.  I am not sure if I am doing it 
right so I will have to verify it.  Anyway... In combination with the above fixes, and a hack, 
I completed my goal.  You can check that out <a href="http://apollo.emulation64.com/latest.jpg" target="_BLANK">here</a>. I also have a larger shot <a href="http://apollo.emulation64.com/ge-ingame.jpg" target="_BLANK">here</a>. Unfortunately it's not 100% playable because I had to resort to a hack to make 
it work. I've also been working on Perfect Dark, but I seem to be stuck.  I am not getting the second 
set of TLB entries defined and when I went to hack that out, it just didn't work unlike GE.  So more bug 
hunting is underway...  Still no promises for release anytime soon.  It's amazing how long it takes 
to debug a CPU Core, took almost 8 hours to get this working.
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>7:30 PM 10/23/2001:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
It's been awhile since I added to this log.  WaveRace Japanese no longer needs a hack for eeprom.  It 
works perfectly.  Everything is either working or it doesn't since I improved the timing in 0.03.
1080, MKT work nicely now.  GoldenEye is being worked on.  I need to make more accurate TLB support.
As for Killer Instinct Gold... I made it so the sprites aren't black but I broke the gameplay!  It's
no longer playable. ;(  I think I messed too much with the TLB.  I will have to try to fix it. heh.
Audio and Graphics are coming along slowly but ok.  Current internal build 0.03 Alpha 3 is very stable 
and almost "public ready".  No public release is scheduled.  We can only hope that I decide to do 
so in the future.  Thanks for keeping your interest in Apollo!
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>7:52 AM 07/24/2001:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
There are so many issues in my current CPU Core that I feel it would take too long to fix them all before the next release.  I sense
that I may end up releasing it a tad premature, but I will do as I must.... including hacking WaveRace Japanese to work.  Currently,
it dies when the EEPRom is detected to be the right size WaveRace desires.  Oh well. :(  If I happened to release, it will probably be
when I wake up later today.  I work a night shift from 11p-7a.  So I post this within minutes of returning.  My back is sore and so are
my eyes. Anyway... I have a few target games I want to debug for the version after the next version... including 1080, MKT, GoldenEye,
Mario Party, and maybe Killer Instinct Gold.  Once those games work... I think my compatibility will be comparable to TR64.  Oops... time
to sleep.
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>7:45 PM 05/25/01:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
This is my first post on the "new" devlog.  I just wanted to quickly describe what I plan on doing with Apollo in the next few weeks/months.  Basically, I need to work more on the R4300i.  Did you see the compatibility list Dominator threw out?  Ugh.  How awful.  Fortunately I don't have to work on the RDP so I can concentrate on the CPU Core while I wait to see what's going on with TR64.  Did you see everyone was taking a break?  gosh... I sometimes wonder why a hobby becomes so frustrating/time consuming that people need breaks.  The longest break I really took was when I started playing CounterStrike again after Phrodide left the team.  Then it was pretty much stopped/discontinued.  Oh well... lots of rambling in this post... but that is what this devlog is here for.  Now... hrm... I just scrolled down and saw a list of things todo from the past.  Mark that completely off the list.  I am going to start writing a CPU Core from scratch in ASM (so its easy to dynarec in the future) and then I am going to debug the hell out of it.  I don't think the next version will necessarily have a dynarec in it.  But I hope it will be able to play more then demos!  I will not release another version until I get the compatibility up!!!  I had how it acts right now.  Anyway.  I gotta run.  ICQ is uh-ohing me like crazy.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

<FONT size="2"><I><B>01:13 PM 04/30/01:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
ow...  It's been awhile since last update (2 weeks).  Here's what's going down.  I thought about regularly updating my Audio Plugin, but I  decided it wasn't in the best interest of TR64. So all my changes from the last public release won't be seen until WIP6.  It's up to v0.13 which fixes major emulation issues in Cruisin USA, MKT, Robotron, and Rampage (others I assume).  What else?  I've been trying to fix the skullkid laugh bug... but I think I will wait until save states work correctly in a zilmar spec emu or I get my audio stuff ported to a nemu audio.dll (NO!  It will absolutely not be released to the public).  I have been learning how to do console windows (like the windows thing does for a dos command prompt within windows).  It's not hard but it's too much work imo.  I will need to spend sometime on this.  Oh duh... I am doing this for an UHLE-like debugger. Where is RM to do my GUI coding when I need him....  though psi prolly did it anyway. l8r g8r. <BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>02:25 PM 04/14/01:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
Happy easter everyone... although it's tomorrow.  I decided to take this time to makes an offical layout of what I plan on doing.  This way... It's concrete (and I quit switching from project to project).  I noticed something bad when I was running LaC's Audio Monitor rom on my Audio plugin.  It's not accurate... or even CLOSE to what it should sound like (what my LLE does, and what LaC's HLE does).  My plugin is good... but it's not perfect.  Bummer eh?  So first on the list is making a new HLE Audio Plugin concentrating COMPLETELY on quality.  Next, I've been messing with 3D stuff... no RDP Graphics... Just 3D.  So I want to keep learning this... perhaps in time to help my new coder with his 3D work.  Next, I have Apollo is a million pieces trying to rewrite COP0 and put in new exception handling...  I want to finish this up...  as well as the GUI parts I added.  hmm... what else... I need to finish up my Dynarec... and umm... yeah... well... It's obviously in order of priority.  With my waning interest in the project as a whole, I'd like to get one more person on the team full time.  Those company guys have shown renewed interest but only time will tell if I can meet thier demands before their happy to help.<BR><BR>
	1. 100% Audio HLE<BR>
	2. Learning 3D<BR>
	3. Finish COP0<BR>
	4. Finish GUI Enhancements<BR>
	5. Complete Dynarec<BR>
	6. Get Apollo to be more likable by The Company<BR><BR>
hasta luego<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>01:36 AM 04/06/01:</B></I></FONT><BR>
<FONT color="ff0000">></FONT>&nbsp;&nbsp;&nbsp;&nbsp;
Do you forgive me?  I hope.  Been 1 month and 2 minutes since I last posted to thisdevlog.  lol... kinda funny eh?  What's new with me?  Lots...  I wanted to releaseApollo v0.01e on April 1st, 2nd, or 3rd... but something truly amazing happen.  Someonelegitimately found interest in helping me with the project.  At first I thought he justwanted to take it over but he wants to help an existing author.  So far he's done a greatdeal of work on the debugger I started writing last week and last weekend to get away fromthe audio plugin.  Since he's joined, I've added 100% zilmar spec except I have a few OpenGLissues to deal with (Threading...) and I have heard audio for the first time in Apollo :)That was truly amazing.  TR64's input works fine (though it lags the emu when it first startsup.  I think I will eventually write my own input plugin... yes... I think so. :)  lemmesee.My .plan for the weekend is to add all the things v0.01d was suppose to have and clean upthe source code.  I will then probably start making my interpretive compatible again.  Nowthat I have a debugger, it should be easier to find where things occurred... I have somefeatures to add to the debugger which my new co-author hasn't but that will also be done.long update... but it's been a long time.  peace and god bless :)  ciao.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>01:34 AM 03/06/01:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
I feel so lonely... no Company. :)  Bad pun... oh well.  Anyway... I restartedbeta testing for Apollo.  A select 4 people have gotten the chance to be part of theteam.  You will recognize them as webmasters for a couples sites who were in the rightplace at the right time.  I am sure you will see screenshots and reports next week fromthen in regards the beta I plan on giving them Friday.  Just to let you know I am stillkicking... I just don't care to be so public... It was never really my intent to publicizethis emulator in the first place.  Now I feel obligated to provide more support with theincreased visitors.  ciao.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>02:32 AM 02/18/01:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
Ahh... I feel so much better.  Times have been tough for me lately.  Many of youknow of the personal problems I've suffered last November from the breakup of my gfand I.  Well... the medicine I've been put on causes me a lot of apathy and depression.not good. :(  So I ended up screwing my current semester in school.  I am thinking abouttransferring to a new school too which is VERY BAD is I screw up this semster. DDD:Anyway... I went home last Thursday so I can sort some thoughts out and believe me...your home is the safest place on the planet. :P  I sorted a bunch of shit out in myhead and I am ready to tackle the rest of the semester.  Though I will be droppingdown to 12 credits, I will be doing so with a clear head (after my doctor takes me offthis stupid zoloft).  So that's my current status.  As for Apollo, I haven't heard muchfrom either two of the people I added to the team recently.  I should send them outanother email tomorrow when i get back to school.  I'd like to know when/if they willbe working on the project so I know if I should stop seeking help or if I should evenkeep working on it solo.  Personally, I would almost rather just work on it myself sinceI do know my own reliability.  Just a random thought, but have any of you seen Hannibalyet?  I wonder if it's a good movie to see. :)  Lemme know if you even see this devlog.I know some of you do read it... makes me cry with happy tears. :') LOL... okay. nuffbeing stupid.  Another status report in a couple days once I get back into the swingof things.  ciao<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>07:24 AM 02/12/01:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
We will see if anyone notices this. :)  So what's up with Apollo?  What's not upwith Apollo... that is the real question.  Looks like the public has been fooled intobelieving Apollo died because of a misunderstanding.  Hehe... this makes me feelmore comfortable knowing my site gets only 600-700 hits/day rather then 4k/5k has ishas been through most of January.  So in this way it's good since now I can focus onrestructuring Apollo's source as well as aquainting my new team to the source code.As far as TR64 goes and the mysterious Audio mp3s going around... it's all good.Those who are reading this will see it in WIP6. :)  SWEET! l8r.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>03:40 PM 01/02/01:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
I missed the release date... :(  Oh well... I am doing everything I should have done before the release but wouldn't have gotten done.  I hope to be finished soon.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>12:33 AM 12/30/00:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
ANOTHER uneventful day of debugging the stupid CPU... Still no progress so guesswhat?  I quit :)  I am just going to fix a few things up and release.  I am tiredof messing with this BS.  Once a release is made, I will go back in my lil cornerof the world in quiet and rewrite the CPU from the ground up with one thing on mymind.  100% perfect emulation.  *sigh* I go now :) Bye<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>03:34 AM 12/29/00:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
Today was much slower then yesterday... I spent the whole day debugging my r4k.Unfortunately, I found no bugs!!!  So... Why isn't my f***ing core not compatiblewhen I find no bugs?!  hrm... Oh well... ~10 hours of work down the drain...Something funny happen today... This dude on #emulation64 said Apollo has littleto no improvements since last release.  And he also stated that Apollo shouldplay games which other emulators don't.  Well... for that kind sir a big stfu. :)This isn't "lets become an elite emulator in 21 days".  Anyway... I tested a fewroms I have on CD.  The follow don't work because of Access Violation (Trying toaccess N64 Memory which isn't defined): Perfect Dark, MKT, Bomber Man Hero, Castlevania64, Cruisin' USA, and NHL Breakaway '99.  Clayfighter 63 1/3 Erroredout when $zero became nonzero (resetting it to zero didn't help).  And 1080SnowBoarding has a Bad PI transfer size error.  I tried to debug all day but I amgetting rather sick of it.  I might release with CPU errors.  I just want to leteveryone experience my work.  Tomorrow I plan on finishing up what I didn't dotoday.  I am still hoping for a release before December 31st at 11:59PM CST.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>04:17 AM 12/28/00:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
Wow... busy day today...  I am so tired now too.  I think I will stop... Apollonow plays Zelda: Majora's Mask.  I took a couple screenies using RCP's plugins.  Iwill post them on the Apollo Messageboard.  I don't want to over clutter the frontpage with news posts so this devlog is working really well. Now that Zelda MoM isworking, I have interest in figuring out FlashRAM.  However, I need to get a fewother things done on my todo list and if FlashRAM isn't done by the time Apolloneeds to be released, then so be it.  Apollo isn't fast enough to play the entiregame anyway. :)<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>03:14 AM 12/28/00:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
Just added boot code detection.  Seems to work okay... trying to figure out why1080 is give me bad PI transfers and Banjo Kazooie is stalling.  I have a few ideasbut no one is up to listen and offer their experienced opinion.  Things are startingto look really good for Apollo.  :)<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>10:50 PM 12/27/00:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
I got SRAM working not too long ago...  You can see a screenshot of Zelda64 in actionusing RCP's D3D plugin: http://apollo.emulation64.com/sram.jpg.  Now that Zelda64 workspretty nicely, it's time to fix that evil CPU bug which makes him blink then go intodynarec/rewrite mode.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>11:46 AM 12/27/00:</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
I added co processor unusable exception handling to COP1 and it fixes the Mario64'sstray triangles.  The Zelda64 bug is still present and is probably just a bug in a CPUopcode.  During the rewrite, these issues should be fixed.  The freezing bug has beenfixed also.  I found an error in the code Phrodide wrote for VSync detection.  Thecounter he used would overflow and cause the emulator to freeze.  I might fix upApollo as much as possible and release v0.01d before completing the rewrite. v0.01eshould be the rewritten version with my partial dynarec.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>11:40 AM 09/02/00 :</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
It's been more then a month since I've updated this long.  Well guesswhat?  Nothing's happen since the last update.  Not anything worth mentioning here.Phrodide is very busy... so in his absence I have taken control of the source code.I pray no problems arrive when he decides to come back.  More frequent updates canbe expected.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>


<FONT size="2"><I><B>11:45 AM 07/30/00 :</B></I></FONT><BR>
<FONT color="ff0000">></FONT><FONT color="ff9999">></FONT>>
I am leaving the project until I can continue work on it.  Call it a vacation. :P I have also removed all previous news posts since phro's announcement and devlog posts until that time also.<BR>
<FONT color="ff0000">(</FONT><FONT color="ff9999">(</FONT>(Azimer)<FONT color="ff9999">)</FONT><FONT color="ff0000">)</FONT><BR><BR><BR>

  </TD>
</TR>
</TABLE>

</BODY>
</HTML>
