/*	
	Simple rom information reading program...

    No zip file support has been added...  This is just a demo for bjz after all.

	Revision History:
	---------------------------------------------------------------------
	04-14-02 : 02:57AM CST	-	Completed Initial Version (Azimer)

*/

#include <windows.h>
#include <stdio.h>
#include <conio.h>

#define u16 unsigned short
#define u32 unsigned int
#define u8 unsigned char
#define u64 unsigned __int64

// Common Structures
typedef struct n64hdr {
  u16  valid; // 00
  u8  is_compressed; // 02
  u8  unknown; //03
  u32 Clockrate; // 04
  u32 Program_Counter; // 08
  u32 Release; // 0C
  u32 CRC1; // 10
  u32 CRC2; // 14
  u64 filler1; // 18
  u8  Image_Name[20]; // 20-33
  u8  uk1[7]; // 34-3a
  //u8  filler2[7];
  u8  Manu_ID; // 3b
  u16  Cart_ID; // 3c
  u8  Country_Code; // 3e
  u8  filler3; //3f
  u32 BOOTCODE;
} Header;

#pragma warning( disable : 4035 )

inline DWORD SWAP_DWORD(DWORD y) {
	__asm { 
		mov eax,y 
		bswap eax 
	}
} 

#pragma warning( default : 4035 )

void main (int argc, char *argv[]) {
	Header rominfo;
	FILE *rom;

	memset (&rominfo, 0, sizeof (Header));

	if (argc != 2) {
		printf ("N64 Rom Header Demonstration for bjz\n\
Usage Summary:\n\
         \"bjz.exe [rom filename]\"\n");
		return;
	}

	printf ("N64 Rom Header Demonstration for bjz... \nReading in rom: %s\n", argv[1]);

	rom = fopen (argv[1], "rb");
	if (rom == NULL) {
		printf ("ERROR: File not found\n");
		return;
	}
	fread (&rominfo, 1, sizeof(Header), rom);

	if (rominfo.valid == 0x8037) {
		for (int x = 0; x < sizeof(Header); x += 2) {
			u8 t = *((char *)(&rominfo) + x + 1);
			*((char *)(&rominfo) + x + 1) = *((char *)(&rominfo) + x);
			*((char *)(&rominfo) + x) = t;
		}
	} else if (rominfo.valid == 0x3780) {
		printf ("Rom is Word Swapped\n");
	} else {
		WORD temp;

		temp = rominfo.valid;
		rominfo.valid = (rominfo.is_compressed << 8) | rominfo.unknown;

		rominfo.is_compressed = temp & 0xff;
		rominfo.unknown = (temp >> 8) & 0xff;
		if (rominfo.valid == 0x8037) {
			for (int x = 4; x < sizeof(Header); x+=4) {
				(*(DWORD *)(&rominfo+x)) = SWAP_DWORD (*(DWORD *)(&rominfo+x));
			}
			printf ("Rom is DWORD Swapped (unsupported)\n");
		} else {
			printf ("ERROR: This is not a valid N64 rom image!\n");
			return;
		}
	}
	rominfo.Program_Counter = SWAP_DWORD(rominfo.Program_Counter);
	rominfo.CRC1 = SWAP_DWORD(rominfo.CRC1);
	rominfo.CRC2 = SWAP_DWORD(rominfo.CRC2);

	printf ("Rom Title: %s\n", rominfo.Image_Name);
	printf ("Rom CRC1: %08X\n", rominfo.CRC1);
	printf ("Rom CRC2: %08X\n", rominfo.CRC2);
	printf ("Country:");
	switch (rominfo.Country_Code) {
		case 'D': printf (" Germany\n"); break;
		case 'E': printf (" USA\n"); break;
		case 'F': printf (" French\n"); break;
		case 'J': printf (" Japan\n"); break;
		case 'I': printf (" Italian\n"); break;
		case 'P': printf (" Europe\n"); break;
		case 'S': printf (" Spanish\n"); break;
		case 'U': printf (" Australia\n"); break;
		case 0: printf (" None\n"); break;
		default:
			printf (" Unknown %c\n", rominfo.Country_Code);
	}
	printf ("Manufactured By:");
	switch (rominfo.Manu_ID) {
		case 'N':
			printf (" Nintendo\n");
			break;
		case 0:
			printf (" None\n");
			break;
		default:
			printf (" (Unknown) %c\n", rominfo.Manu_ID);
			break;
	}

	printf ("%04X\n", rominfo.Cart_ID); // Don't know what this is... :(
	printf ("%c%c\n", *((char *)(&rominfo.Cart_ID)+1), *((char *)(&rominfo.Cart_ID)+0));
	// Seems each title has it's own unique Cart_ID... probably a license number given by Nintendo
	// Perhaps this could be useful in the future for those hard to emulate games...
	// The lookup table would be very small... perhaps this could be used for GFX too?
	switch (rominfo.Cart_ID) {
		case 0x4C41: printf ("Super Smash Bros.\n"); break;
		case 0x4B42: printf ("Banjo Kazooie\n"); break;
		case 0x5A42: printf ("NFL Blitz\n"); break;
		case 0x3742: printf ("Banjo Tooie\n"); break;
		case 0x5543: printf ("Crusin' USA\n"); break;
		case 0x3344: printf ("Castlevania 64\n"); break;
		case 0x4E44: printf ("Duke Nukem 64\n"); break;
		case 0x4F44: printf ("Donkey Kong 64\n"); break;
		case 0x5445: printf ("Quest64\n"); break;
		case 0x5546: printf ("Conker's Bad Fur Day\n"); break;
		case 0x4547: printf ("Golden Eye 007\n"); break;
		case 0x544B: printf ("Mario Kart 64\n"); break;
		case 0x424C: printf ("Mario Party\n"); break;
		case 0x574D: printf ("Mario Party 2\n"); break;
		case 0x4B4D: printf ("Mortal Kombat Trilogy\n"); break;
		case 0x454D: printf ("MACE\n"); break;
		case 0x384D: printf ("Mario Tennis\n"); break;
		case 0x4450: printf ("Perfect Dark\n"); break;
		case 0x3950: printf ("Mrs. PacMan\n"); break;
		case 0x5052: printf ("RAMPAGE\n"); break;
		case 0x5552: printf ("SF Rush 2049\n"); break;
		case 0x4D53: printf ("Mario 64\n"); break;
		case 0x4653: printf ("SF Rush\n"); break;
		case 0x4554: printf ("1080\n"); break;
		case 0x5257: printf ("WaveRace\n"); break;
		case 0x4E57: printf ("WCW/NWO World Tour\n"); break;
		case 0x4357: printf ("WCW/NWO Revenge\n"); break;
		case 0x5359: printf ("Yoshi Story\n"); break;
		case 0x4C5A: printf ("Zelda 64\n"); break;
		case 0x545A: printf ("Zelda Majora's Mask\n"); break;
			;
		default:
			;
	}

	fclose (rom);
	getch ();

}
