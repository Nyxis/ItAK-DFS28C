import random
from RandomBehavior import RandomBehavior
from Dice import Dice
from Coin import Coin
from CardDeck import CardDeck

class GameMaster:
    def __init__(self, dice_count, coin_count, deck1, deck2, success_rate=40, crit_rate=15, fumble_rate=5):
        self.dices = [Dice(6) for _ in range(dice_count)]
        self.coins = [Coin(2) for _ in range(coin_count)]
        self.deck1 = deck1
        self.deck2 = deck2
        self.success_rate = success_rate
        self.crit_rate = crit_rate
        self.fumble_rate = fumble_rate

    def pleaseGiveMeACrit(self):
        all_items = self.dices + self.coins + [self.deck1, self.deck2]
        selected_item = random.choice(all_items)

        if isinstance(selected_item, (Dice, Coin)):
            return RandomBehavior.roll(self.success_rate, self.crit_rate, self.fumble_rate)
        elif isinstance(selected_item, CardDeck):
            return selected_item.roll()
