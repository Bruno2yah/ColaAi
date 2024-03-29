import { Text, View, Image, ScrollView, Pressable } from 'react-native';

import styles from '../../../../Components/Styles/Categorias/CategoriasStyle';

import NavBar from '../../../../Components/NavBar/navbar';

export default function Teatros({ navigation }) {

  return (
    <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start', }}>
              <Image
                style={{ height: 152, width: 129 }}
                source={require('../../../../../assets/img/Teatros/superiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 165, width: 100 }}
                source={require('../../../../../assets/img/Teatros/superiorDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '94%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 124, width: 109 }}
                source={require('../../../../../assets/img/Teatros/inferiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 75, width: 70 }}
                source={require('../../../../../assets/img/Teatros/inferiorDireito.png')}
              />
            </View>
          </View>
          {/* Imagem do Cola ai */}
          <View style={styles.fundo}>
            <Image
              style={{ height: 84, width: 300 }}
              source={require('../../../../../assets/img/Teatros/teatrosTxt.png')}
            />
          </View>
        </View>
      <ScrollView>
        <View style={styles.cards}>
          <View style={styles.TeatrosArea}>
            <Image
              style={styles.TeatrosFoto}
              source={require('../../../../../assets/img/Teatros/teatro_1.png')}
            />
            <View style={styles.TeatrosLocal}>
              <Text style={{ fontSize: 32, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                TEATRO GAZETA
              </Text>
              <View style = {{flexDirection:'row', height: 75}}>
                <Image
                    style={{ height: 30, width: 20, marginLeft: 5 }}
                    source={require('../../../../../assets/img/Teatros/Point.png')}
                />
                <Text
                    style={{
                      fontSize: 20,
                      textAlign: 'justify',
                      color: '#A6A6A6',
                      paddingLeft: 5,
                      paddingRight: 5
                    }}
                >
                  Av. Paulista, 900 - Bela Vista, 
                  São Paulo - Sp, 01310-100
                </Text>
              </View>
              <Pressable
                style={styles.button}
                onPress={() => navigation.navigate('HomeUsuario')}
              >
                <Text style={styles.buttonText}>Saber mais</Text>
              </Pressable>
            </View>
          </View>

          <View style={styles.TeatrosArea}>
            <Image
              style={styles.TeatrosFoto}
              source={require('../../../../../assets/img/Teatros/teatro_1.png')}
            />
            <View style={styles.TeatrosLocal}>
              <Text style={{ fontSize: 32, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                TEATRO GAZETA
              </Text>
              <View style = {{flexDirection:'row', height: 75}}>
                <Image
                    style={{ height: 30, width: 20, marginLeft: 10 }}
                    source={require('../../../../../assets/img/Teatros/Point.png')}
                />
                <Text
                    style={{
                    fontSize: 20,
                    textAlign: 'center',
                    color: '#A6A6A6',
                    marginRight: 20
                    }}
                >
                  Av. Paulista, 900 - Bela Vista, 
                  São Paulo - Sp, 01310-100
                </Text>
              </View>
              <Pressable
                style={styles.button}
                onPress={() => navigation.navigate('HomeUsuario')}
              >
                <Text style={styles.buttonText}>Saber mais</Text>
              </Pressable>
            </View>
          </View>
        </View>
      </ScrollView>
      <NavBar />
    </View>
  );
}
