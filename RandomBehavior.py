import random
from RandomResult import RandomResult

class RandomBehavior:
    @staticmethod
    def roll(success_rate, crit_rate, fumble_rate):
        rand_num = random.randint(1, 100)
        if rand_num <= fumble_rate:
            return RandomResult.FUMBLE
        elif rand_num <= fumble_rate + crit_rate:
            return RandomResult.CRIT_SUCCESS
        elif rand_num <= fumble_rate + crit_rate + success_rate:
            return RandomResult.SUCCESS
        else:
            return RandomResult.FAILURE
