var dwarf = new Object();

  dwarf.fighter = true;
  dwarf.weapon  = "axe";
  dwarf.height  = 4;
  dwarf.power   = 10;

  console.log(dwarf.weapon);

var elf = {
  fighter: true,
  weapon:  "bow",
  height:  6.2,
  power:   8,
  updatePower: function(a) {
    elf.power = elf.power + a;
    return ++elf.power;
  }
}

  console.log(elf);
  elf.updatePower(-1);
  console.log(elf);
