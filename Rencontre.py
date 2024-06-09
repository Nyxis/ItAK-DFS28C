class Rencontre:
    def __init__(self, crit_rate, success_rate, failure_rate, fumble_rate, perte_vitalite, equipement_bonus):
        self.crit_rate = crit_rate
        self.success_rate = success_rate
        self.failure_rate = failure_rate
        self.fumble_rate = fumble_rate
        self.perte_vitalite = perte_vitalite
        self.equipement_bonus = equipement_bonus

    def get_rates(self, personnage):
        rates = {
            "Critique": self.crit_rate,
            "Succes": self.success_rate,
            "Echec": self.failure_rate,
            "Fumble": self.fumble_rate
        }
        if personnage.rapidite <= 5:
            rates["Fumble"] += 5
        if personnage.force >= 10:
            rates["Critique"] += 5
        return rates
