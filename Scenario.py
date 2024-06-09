from RandomResult import RandomResult

class Scenario:
    def __init__(self, rencontres):
        self.rencontres = rencontres

    def start(self, personnage, game_master):
        for rencontre in self.rencontres:
            rates = rencontre.get_rates(personnage)
            result = game_master.pleaseGiveMeACrit()

            if result in rates:
                if result == RandomResult.FUMBLE:
                    personnage.vitalite -= 2 * rencontre.perte_vitalite
                elif result == RandomResult.FAILURE:
                    personnage.vitalite -= rencontre.perte_vitalite
                elif result == RandomResult.SUCCESS:
                    personnage.vitalite += rencontre.perte_vitalite
                    self.rencontres.remove(rencontre)
                elif result == RandomResult.CRIT_SUCCESS:
                    personnage.vitalite += rencontre.perte_vitalite
                    personnage.equipements.append(rencontre.equipement_bonus)
                    self.rencontres.remove(rencontre)
            else:
                print(f"Résultat non valide: {result}")

        return personnage.vitalite <= 0 or not self.rencontres
