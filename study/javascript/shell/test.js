const alex = {
  name: "alex",
  race: "dwarf",
  weapon: "axe",
  greet: function() {
    return `hi, my name is ${this.name}`;
  },
};

const gimli = {
    name: "Gimli",
    race: "dwarf",
    weapon: "axe",
    greet: function() {
        return `Hi, my name is ${this.name}!`;
    },
};

alex.greet();
