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
