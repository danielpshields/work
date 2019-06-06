//
// var elf = new Object();
// elf.hat    = "fedora";
// elf.power  = 8;
// elf.speed  = 10;
// elf.weapon = "bow";
// elf.health = 100;
// elf.damage = function() {
//   return --elf.health;
// }
//
// var dwarf = {
//   power: 10,
//   speed: 8,
//   weapon: "axe",
//   health: 100,
//   damage: function() {
//     return --dwarf.health;
//   },
//   heal: function(a) {
//     return dwarf.health + a;
//   }
// }
// console.log(elf["hat"]);
// console.log(elf.damage());
// console.log(dwarf.damage());
// console.log("dwarf's health increased to", dwarf.heal(5));

function Character(name, power, speed, weapon, health, damage, heal) {
  this.name  = name;
  this.power = power;
  this.speed = speed;
  this.weapon = weapon;
  this.health = health;
  this.damage = function () {
    return --this.health;
  };
  this.heal = function(a) {
    return ++this.health + a;
  };
}

var characters = [
  new Character("elf", 8,10,"bow",100),
  new Character("dwarf", 10, 8, "axe", 100)];

console.log(characters[1].damage());
