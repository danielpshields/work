var elf = new Object();
elf.power  = 8;
elf.speed  = 10;
elf.weapon = "bow";
elf.health = 100;
elf['hat'] = "fedora";
elf.damage = function() {
  return --elf.health;
}

var dwarf = {
  power: 10,
  speed: 8,
  weapon: "axe",
  health: 100,
  damage: function() {
    return --dwarf.health;
  },
  heal: function(a) {
    return dwarf.health + a;
  }
}

console.log(elf['hat']);
console.log(elf.damage());
console.log(dwarf.damage());
console.log("dwarf's health increased to", dwarf.heal(5));
