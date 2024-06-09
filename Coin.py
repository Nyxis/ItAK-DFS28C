import random

class Coin:
    def __init__(self, flips):
        self.flips = flips

    def roll(self):
        return self._flip(self.flips)

    def _flip(self, flips_left):
        if flips_left == 0:
            return 1 if random.randint(1, 2) == 1 else 2
        else:
            flip = random.randint(1, 2)
            if flip == 1:
                return self._flip(flips_left - 1)
            else:
                return 2
