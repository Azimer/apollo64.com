

           *********************************
           ******  The Apollo Project ******
           ******     v0.03 Binary    ******
           ******      11-23-2001     ******
           *********************************

		Dedicated to all those who
		   have never forgotten
		what it means to be free.


***Download Zilmar Spec Plugins****
http://www.smiff.clara.net/utils/plugins/index.htm
http://www.emulation64.com/plugin64.htm and
http://www.emuitalia.com/spinal/plugins/plugins.htm
http://www.pj64.net/
as well as TR64 or 1964's webpages... 


DISCLAIMER and LEGAL STUFF: (Please read before running the software!!!)
--------------------------- (Last Updated 12-24-2000)
 Apollo is freeware - NEVER SELL Apollo or any portion of the software!
   We will take any legal action necessary to protect our rights.

 Anything you do with Apollo, or any portion of the software, is your
   responsibility.  We can not be held accountable for any damages Apollo
   does to you or anything else by your use of this software.  If you do
   not agree, delete this software NOW. (IOW don't blame us for killing
   dad's computer for christ sakes)

 NEVER, EVER.... (like Chris Jericho says it) EVER distribute Apollo with
   commercial ROMs!!!!  It's illegal!  I didn't write this software for some
   one to distribute commercial ROMs with it.  In fact, don't distribute
   Apollo in a modified archive.  Apollo should contain ALL files as they
   were when distributed with the release of the EXE.

 The rights of all trademarks mentioned in this document and in the emulator
   binary executable, Apollo, are retained by their respective owners.

 We have NO affiliated with rightful owner of trademarks, copyrights, patents,
   or otherwise of emulated hardware, nor of software that functions in the
   emulation.

 Please no rom begging.  Your emails will be sent immediately to our legal team
   for possible charges of harassment.  You have been warned!

INTRODUCTION:
------------- (Last Updated 05-19-2000)
   This is just going to be a brief introduction to give you a little background
 on this project.  The Apollo Project really started way back in September when
 4 friends got together to make an N64 emulator.  We were doing very well until
 differences got between us, and we are now down to 2 members.  After wondering
 what to do with the project, Phrodide decided to create something new without
 using any of the former coder's code.  What you see here is the result of that
 effort and a month of time stress.  We are still alive and the next release
 will be a lot better.
    -Azimer (5/19/00)

SYSTEM REQUIREMENTS:
-------------------- (Last updated 11-23-2001)
  Apollo 0.03 still uses an Interpretive Core.  This core requires a lot of
 CPU power from your machine in order to run quickly. At least a 1 Ghz CPU is 
 recommended for ok performance.  Though you'd rather have the fastest machine you
 can get in order to run complex roms like Zelda OOT or Zelda MM.  You should also
 have at least 64MB of RAM at minimum, but I recommend 128MB or more.

RELEASE NOTES:
-------------- (Last updated 11-23-2001)
  4KB EEPROM needs to be selected for some games before you even attempt to use then.
If you realize a game isn't functioning appropriately, try to enable 4KB EEPROM.
Certain games like Perfect Dark, Yoshi Story, and others will not function correctly
without this.  If you select it once, you will not have to select it again.  The size
will be automatically determined based on the filesize of the EEPROM save image.  A
few other notes is that the emulator will be unplayable with games that utilize the
TLB heavily.  I have no TLB caching-type mechanisms employed.  Thus, GoldenEye,
Conker's Bad Fur Day, and a few others are unplayable (too slow).  I have a nasty
FPU bug which I haven't gotten around to fixing yet.  This makes Turok2, ExciteBike64,
and a few other games unplayable.  This is not a complete release, I don't have the
time to work on Apollo until after Christmas.  So I figured I would make one last
release before then.  Apollo still isn't technically public, but I swore to someone
I would release once I got those certain games working.  I honor my word.

-Azimer

USAGE:
------ (Last updated 11-23-2001)
 apollo.exe

 Load up a rom image from the File/Load menu.  The image should play automatically.

 You can also use 1-8 to access the Recent Files and they will load instantly.
 You can also use F2 to save state and F4 to load state.  F1 to get the About box.
 F9 - Pause, F12 - FullScreen, F5 - Reset, F8 - Sound Config
 F7 - Input Config, F6 - Graphics Config.

WHAT'S NEXT:
------------ (Last updated 11-23-2001)
 Dynarec

WHAT'S NEW/HISTORY:
------------------- (Last updated 11-23-2001)
 - November 23rd, 2001 - -=Seventh Release=- (v0.03)
                       - Rewrote TLB Exception Handling
                       - Rewrote Interrupt/Exception Processing
                       - Fixed timing a bit (credits to zilmar)
                       - Fixed Register Settings on bootup
                       - Fixed Jabo 1.40 plugin issue
                       - Began Dynarec (disabled in release)
                       - Added 4KB Option (For Yoshi Story and Perfect Dark)
                       - Added 8MB RDRAM limit violation detection (for Expansion Pak detect)
                       - Fixed N64DD issue (dummy emulation mode) (credits to F|RES)
                       - Better handling of ROM Writes (credits to zilmar)
                       - Implemented Event Handling (useful for delayed PI/SI)
                       - Improved Audio Interfacing slightly
                       - Fixed plugins interfacing bug (I hope)
                       - Modified SaveStates (old ones should STILL work)
                       - Added .pal, .jap, etc. extension for loading from zip files/rom load
                       - Bypass of RSP opcode in RSP interpretive.  This fixed Bottom of the 9th.
                       - Last release until Post-Christmas
 - July     24st, 2001 - -=Sixth Release=- (v0.02)
                       - Fixed unaligned PI transfer bug (credits to schibo)
                       - Fixed DP bit settings at the end of an RDP list
                       - Fixed up the GUI a bit
                       - Fixed the Audio plugin problem with Apollo... Most games should have sound.
                       - Made SRAM/FlashRAM PJ64/TR64 compatible...
                       - Added Save State compression... selectable via menu.
                       - Added 16KBit EEPROM... (kinda) :)
                       - Added Screenshot Option (for PJ64 Revision 1.3 compliance)
                       - Added CPU Crash safety net
                       - Added zipped rom support
                       - Fixed Register 0 != 0 bug which may or maynot effect any roms
                       - Fixed TLB bug in optimized interpretive... it is now 100% compatible with debugging interpretive
                       - Added my RSP interpreter... JPG Decompression is now enabled in Zelda OOT
                       - Added temporary hack to bypass EEPROM for WaveRace SE
                       - Improved compatibility/stability
                       - Other things that I can't remember right now...

 - May      21st, 2001 - -=Fifth Release=- (v0.01e)
                       - Last Release with Phrodide's CORE
                       - Added Mempacks
                       - Added EEPROM
                       - Added Rumble Packs (Options/*RUMBLE*)
                       - Added FlashRAM
                       - Added SRAM
                       - Added CIC-NUS-6106 CRC (though none of the roms work)
                       - Fixed Close Rom Crashing bug (accidentally left debugging code behind)
                       - Closed Source due to not-for-public info
                       - Fixed Plugin Configuration Dialog
                       - Added Audio Plugin Support
                       - Fixed Input Plugin Crashes
                       - Added Save States (although only one is saveable)
                       - Fixed Console Window Hangups
                       - Happy 1st Anniversary Apollo (May 19th, 2000 was first release)

 - January  29th, 2001 - -=Source Only Release=- (v0.01d)
                       - Just the source... Don't feel like writing down what's new...

 - December 24th, 2000 - -=First Emu64 Only WIP Release=- (v0.01d RC)
                       - Plugin Support
		       - Fixed the nasty RSP Bug.  3D Demos work!!!
		       - Got Zelda64 to partially work...  Broke other roms though
		       - Put in controllers again... Very basic input.dll... Z=A X=B and
			 arrows do all the moving around.
		       - Several Speed increases
		       - Merry Christmas everyone!

 - July 09th, 2000 - -=Third  Release=- (v0.01c)
                   - Multi-lingual support
                   - Plugin support (very preliminary) (just the video plugin)
                   - Exception code rewritten (finally)
                   - RSP, RDP, and Audio dummy support added, next release will have more.
                   - Speed hack --some roms run too fast while others no change.
                   - Seriously cleaned up some graphics code
                   - adaptoid support
                   - Removed the VI Hack (if you want it, get an older version)

 - June 19th, 2000 - -=Second Release=- (v0.01b)
		   - Complete Rewrite.
                   - Began RSP Emulation (Biggest consumer of my time) :(
                   - Removed RSP code for this version
                   - Sped up the emulation 1.5fps
                   - Added a debugging message window
                   - Removed Controller support and most of the pif
                   - Added VI Hack to make SP_CRAP and Kid Star's Intro to work properly
                   - Added silent Audio Emulation... (goldcrap works)
                   - More dynarec added (soon to be complete)

 - May  19th, 2000 - Initial Version... everything is new :) (v0.01a)


CONTACT INFORMATION:
-------------------- (Last updated 11-23-2001)
  Before you contact me, please make sure you realize I will delete rom requests,
  beta requests, mean comments, SPAM, and yadda yadda yadda.  Use your brain.  As
  a result of LOTS of SPAM... I was forced to change my email address.  You can now
  access my email from azimer'at'mail'dot'jabosoft'dot'com.  My previous Emulation 64 no longer
  functions!  Or go to my messageboard at www.emutalk.net.  I am most approachable
  on the messageboard.


THANK YOUs and COMMENTS:
------------------------ (Last updated 11-23-2001)
  If you find bugs in this emulator then feel free to contact us at our website:
    http://apollo.emulation64.com/
  If there isn't a feature in here that you would like please use the forum.
  If you want a better readme, give me a suggestion... I can't read minds.
  Now... I would like to thank the follow people for info and help or whatnot:
    Zilmar, LaC, CricketNE, Mike Tedder, Niki Waibel, Marius Dumitrean, Daniel
    Lehman, Atreides, hWnd, _Demo_, schibo, icepir8, gerrit, Martin64, Rice
    #emulation64, and everyone else I neglected to mention :(.
  Greets go out to:
    All the people in #n64dev, #nesdev, and #snesdev.
  Multilanguage support was made possible by: (NOTE: Multilingual Support has been suspended)
    LP-S and boxy (Spanish), LP-S (Portuguese), Martin64 (Swedish), Zersion (Danish),
    NGN (Dutch), RamboDrop (French).  Thank you guys for your contribution!!!
  Now for the most important person to the project:
    -=HUGE=- UBERL33T THX to Jabo.  Truly if it wasn't for him APOLLO 
    would have never existed.

-Eclipse Can Not Die
 ReadMe By: Azimer
 Coding By: Azimer
 Apollo Icon By: Jabo (it looks cool man!)
