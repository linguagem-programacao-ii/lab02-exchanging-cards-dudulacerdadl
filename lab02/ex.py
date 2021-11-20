while True:
    alice, betty = input().split()

    if alice == '0' and betty == '0':
        break

    alice_cards = list()
    betty_cards = list()

    for i in input().split():
        alice_cards.append(i)

    for i in input().split():
        betty_cards.append(i)

    alice = set(alice_cards)
    betty = set(betty_cards)

    cards = betty

    if len(alice) < len(betty):
        cards = alice
        alice = betty

    cards = [x for x in cards if x not in alice]
    print(len(cards))