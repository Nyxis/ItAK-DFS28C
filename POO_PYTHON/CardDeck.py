import random

class CardDeck:
    def __init__(self, colors, values):
        self.colors = colors
        self.values = values

    def roll(self):
        color = random.randint(1, len(self.colors))
        value = random.randint(1, len(self.values))
        return color, value
