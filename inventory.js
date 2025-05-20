const weapons = ["Sword", "Axe", "Bow"];
const potions = ["Health Potion", "Mana Potion"];

const inventory = {
  weapons: [],
  potions: [],
  gold: 0
};

function updateDisplay() {
  const display = document.getElementById("inventoryDisplay");
  display.innerHTML = `
    <h2>Inventory</h2>
    <p>🗡️ Weapons: ${inventory.weapons.join(", ") || "None"}</p>
    <p>🧪 Potions: ${inventory.potions.join(", ") || "None"}</p>
    <p>💰 Gold: ${inventory.gold}</p>
  `;
}

function addWeapon(weapon) {
  if (weapons.includes(weapon)) {
    inventory.weapons.push(weapon);
    console.log(`Added weapon: ${weapon}`);
  }
}

function addPotion(potion) {
  if (potions.includes(potion)) {
    inventory.potions.push(potion);
    console.log(`Added potion: ${potion}`);
  }
}

function usePotion(potion) {
  const index = inventory.potions.indexOf(potion);
  if (index > -1) {
    inventory.potions.splice(index, 1);
    console.log(`Used ${potion}`);
  } else {
    console.log(`No ${potion} in inventory.`);
  }
  updateDisplay();
}

function fightMonster() {
  addWeapon("Sword");
  addPotion("Health Potion");
  inventory.gold += 30;
  updateDisplay();
}

function openTreasure() {
  addWeapon("Bow");
  addPotion("Mana Potion");
  inventory.gold += 70;
  updateDisplay();
}

updateDisplay();
