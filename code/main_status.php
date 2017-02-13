<? include('apollo_head.htm'); ?>

<TABLE border="0" cellpadding="10" cellspacing="0" width="475">
<TR>
  <TD align="middle" valign="top">

<IMG src="../images/reddot.gif" width="5" height="5" border="0">&nbsp;<A href="#Reqs">Requirements</A>&nbsp;
<IMG src="../images/reddot.gif" width="5" height="5" border="0">&nbsp;<A href="#Comp">Compatibility</A>&nbsp;
<IMG src="../images/reddot.gif" width="5" height="5" border="0">&nbsp;<A href="#Hist">History</A>&nbsp;
<IMG src="../images/reddot.gif" width="5" height="5" border="0"><BR>

  </TD>
</TR>
<TR>
  <TD align="left" valign="top">

<BR>
<BR>
<B><FONT face="Verdana" size="2"><A name="Reqs">Apollo v0.03 <U>Recommended</U> Requirements</A></FONT></B><BR>
<BR>

<UL>
<LI>600 Mhz CPU for slow performance, 1 Ghz CPU speed for ok performance.
<LI>64 MB of SDRAM at least, 128MB is recommended
<LI>TNT2 M64 or better, a GeForce 2 MX recommended.
</UL>
<BR>
<BR>
<BR>

  </TD>
</TR>
<TR>
  <TD align="left" valign="top">


<B><FONT face="Verdana" size="2"><A name="Comp">Apollo v0.02 compatibility list</A></FONT></B><BR>
<BR>


<UL>List legend:
<LI><B><FONT color="red">[</FONT>A<FONT color="red">]</FONT></B>: Azimer has tried this one
<LI><B><FONT color="red">[</FONT>U<FONT color="red">]</FONT></B>: USA Region (NTSC 60 fps)
<LI><B><FONT color="red">[</FONT>E<FONT color="red">]</FONT></B>: European Region (PAL 50 fps)
<LI><B><FONT color="red">[</FONT>J<FONT color="red">]</FONT></B>: Japanese / Asian Region
<LI><B><FONT color="red">[</FONT>!<FONT color="red">]</FONT></B>: Well dumped rom-image
</UL>

Most games where tested with Azimers Audio v0.21, <A href="http://www.pj64.net">Jabos Direct3D6 1.20b and Jabos Directinput6</A>, some games needed to be run with other plugins but this is generally the setup we used and recommend. If you have any questions to ask about the games, please go to the <A href="http://www.emulation64.com/ikonboard/forums.cgi?forum=12">Apollo Message Board</A>, your question might allready have an answer or you can simply ask it there.<BR>
<BR>

<!--#include file="apollo_002_complist_fp.htm"-->
<BR>
<BR>
<BR>

<!--#include file="apollo_002_complist_afp.htm"-->
<BR>
<BR>
<BR>

<!--#include file="apollo_002_complist_upih.htm"-->
<BR>
<BR>
<BR>

<!--#include file="apollo_002_complist_ups.htm"-->
<BR>
<BR>
<BR>

<!--#include file="apollo_002_complist_up.htm"-->

  </TD>
</TR>
<TR>
  <TD align="middle" valign="top">

   We would really like to thank <A href="http://www.thecpy.com" target="_blank">Dominator</A> and <A href="mailto:billyzimmerman@yahoo.com">bjz</A> for all their help in making this compatibility list<BR>

  </TD>
</TR>
<TR>
  <TD align="left" valign="top">

<BR>
<BR>
<B><FONT face="Verdana" size="2"><A name="Hist">Apollo Version History</A></FONT></B><BR>
<BR>

<B>November 23rd, 2001</B><BR>
  &nbsp;&nbsp;&nbsp;<B><FONT color="red">-</FONT><FONT color="ff9999">=</FONT>
  Seventh Release
  <FONT color="ff9999">=</FONT><FONT color="red">-</FONT>
  (v0.03)</B>
<UL>
<LI>Rewrote TLB Exception Handling
<LI>Rewrote Interrupt/Exception Processing
<LI>Fixed timing a bit (credits to zilmar)
<LI>Fixed Register Settings on bootup
<LI>Fixed Jabo 1.40 plugin issue
<LI>Began Dynarec (disabled in release)
<LI>Added 4KB Option (For Yoshi Story and Perfect Dark)
<LI>Added 8MB RDRAM limit violation detection (for Expansion Pak detect)
<LI>Fixed N64DD issue (dummy emulation mode) (credits to F|RES)
<LI>Better handling of ROM Writes (credits to zilmar)
<LI>Implemented Event Handling (useful for delayed PI/SI)
<LI>Improved Audio Interfacing slightly
<LI>Fixed plugins interfacing bug (I hope)
<LI>Modified SaveStates (old ones should STILL work)
<LI>Added .pal, .jap, etc. extension for loading from zip files/rom load
<LI>Bypass of RSP opcode in RSP interpretive.  This fixed Bottom of the 9th.
<LI>Last release until Post-Christmas
</UL>
<BR>
                     

<B>July 24st, 2001</B><BR>
  &nbsp;&nbsp;&nbsp;<B><FONT color="red">-</FONT><FONT color="ff9999">=</FONT>
  Sixth Release
  <FONT color="ff9999">=</FONT><FONT color="red">-</FONT>
  (v0.02)</B>
<UL>
<LI>Fixed unaligned PI transfer bug (credits to schibo)
<LI>Fixed DP bit settings at the end of an RDP list
<LI>Fixed up the GUI a bit
<LI>Fixed the Audio plugin problem with Apollo... Most games should have sound.
<LI>Made SRAM/FlashRAM PJ64/TR64 compatible...
<LI>Added Save State compression... selectable via menu.
<LI>Added 16KBit EEPROM... (kinda) :)
<LI>Added Screenshot Option (for PJ64 Revision 1.3 compliance)
<LI>Added CPU Crash safety net
<LI>Added zipped rom support
<LI>Fixed Register 0 != 0 bug which may or maynot effect any roms
<LI>Fixed TLB bug in optimized interpretive... it is now 100% compatible with debugging interpretive
<LI>Added my RSP interpreter... JPG Decompression is now enabled in Zelda OOT
<LI>Added temporary hack to bypass EEPROM for WaveRace SE
<LI>Improved compatibility/stability
<LI>Other things that I can't remember right now...
</UL>
<BR>

<B>May 21st, 2001</B><BR>
  &nbsp;&nbsp;&nbsp;<B><FONT color="red">-</FONT><FONT color="ff9999">=</FONT>
  Fifth Release
  <FONT color="ff9999">=</FONT><FONT color="red">-</FONT>
  (v0.01e)</B>
<UL>
<LI>Last Release with Phrodide's CORE
<LI>Added Mempacks
<LI>Added EEPROM
<LI>Added Rumble Packs (Options/*RUMBLE*)
<LI>Added FlashRAM
<LI>Added SRAM
<LI>Added CIC-NUS-6106 CRC (though none of the roms work)
<LI>Fixed Close Rom Crashing bug (accidentally left debugging code behind)
<LI>Closed Source due to not-for-public info
<LI>Fixed Plugin Configuration Dialog
<LI>Added Audio Plugin Support
<LI>Fixed Input Plugin Crashes
<LI>Added Save States (although only one is saveable)
<LI>Fixed Console Window Hangups
<LI>Happy 1st Anniversary Apollo (May 19th, 2000 was first release)
</UL>
<BR>

<B>January 29th, 2001</B><BR>
  &nbsp;&nbsp;&nbsp;<B><FONT color="red">-</FONT><FONT color="ff9999">=</FONT>
  Source Only Release
  <FONT color="ff9999">=</FONT><FONT color="red">-</FONT>
  (v0.01d)</B>
<UL>
<LI>Just the source... Don't feel like writing down what's new...
</UL>
<BR>

<B>December 24th, 2000</B><BR>
  &nbsp;&nbsp;&nbsp;<B><FONT color="red">-</FONT><FONT color="ff9999">=</FONT>
  First Emu64 Only WIP Release
  <FONT color="ff9999">=</FONT><FONT color="red">-</FONT>
  (v0.01d RC)</B>
<UL>
<LI>Plugin Support
<LI>Fixed the nasty RSP Bug.  3D Demos work!!!
<LI>Got Zelda64 to partially work...  Broke other roms though
<LI>Put in controllers again... Very basic input.dll... Z=A X=B and arrows do all the moving around.
<LI>Several Speed increases
<LI>Merry Christmas everyone!
</UL>
<BR>

<B>July 09th, 2000</B><BR>
  &nbsp;&nbsp;&nbsp;<B><FONT color="red">-</FONT><FONT color="ff9999">=</FONT>
  Third Release
  <FONT color="ff9999">=</FONT><FONT color="red">-</FONT>
  (v0.01c)</B>
<UL>
<LI>Multi-lingual support
<LI>Plugin support (very preliminary) (just the video plugin)
<LI>Exception code rewritten (finally)
<LI>RSP, RDP, and Audio dummy support added, next release will have more.
<LI>Speed hack --some roms run too fast while others no change.
<LI>Seriously cleaned up some graphics code
<LI>adaptoid support
<LI>Removed the VI Hack (if you want it, get an older version)
</UL>
<BR>

<B>June 19th, 2000</B><BR>
  &nbsp;&nbsp;&nbsp;<B><FONT color="red">-</FONT><FONT color="ff9999">=</FONT>
  Second Release
  <FONT color="ff9999">=</FONT><FONT color="red">-</FONT>
  (v0.01b)</B>
<UL>
<LI>Complete Rewrite.
<LI>Began RSP Emulation (Biggest consumer of my time) :(
<LI>Removed RSP code for this version
<LI>Sped up the emulation 1.5fps
<LI>Added a debugging message window
<LI>Removed Controller support and most of the pif
<LI>Added VI Hack to make SP_CRAP and Kid Star's Intro to work properly
<LI>Added silent Audio Emulation... (goldcrap works)
<LI>More dynarec added (soon to be complete)
</UL>
<BR>

<B>May 19th, 2000</B><BR>
  &nbsp;&nbsp;&nbsp;<B><FONT color="red">-</FONT><FONT color="ff9999">=</FONT>
  Initial Version... everything is new :)
  <FONT color="red"><FONT color="ff9999">=</FONT><FONT color="red">-</FONT></FONT>
  (v0.01a)</B>
<BR>
<BR>
<BR>




  </TD>
</TR>
<TR>
  <TD align="middle" valign="top">

<IMG src="../images/reddot.gif" width="5" height="5" border="0">&nbsp;<A href="#Reqs">Requirements</A>&nbsp;
<IMG src="../images/reddot.gif" width="5" height="5" border="0">&nbsp;<A href="#Comp">Compatibility</A>&nbsp;
<IMG src="../images/reddot.gif" width="5" height="5" border="0">&nbsp;<A href="#Hist">History</A>&nbsp;
<IMG src="../images/reddot.gif" width="5" height="5" border="0"><BR>

  </TD>
</TR>
</TABLE>

</BODY>
</HTML>
