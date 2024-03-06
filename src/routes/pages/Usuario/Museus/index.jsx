import { Text, View, Image, ScrollView, TouchableOpacity } from 'react-native';

import styles from '../../../../Components/Styles/Categorias/CategoriasStyle';

import NavBar from '../../../../Components/NavBar/navbar';

export default function Museus({ navigation }) {

  return (
    <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start', }}>
              <Image
                style={{ height: 152, width: 128 }}
                source={require('../../../../../assets/img/Museus/superiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 150, width: 100 }}
                source={require('../../../../../assets/img/Museus/superiorDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '94%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 174, width: 159 }}
                source={require('../../../../../assets/img/Museus/inferiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 135, width: 125 }}
                source={require('../../../../../assets/img/Museus/inferiorDireito.png')}
              />
            </View>
          </View>
          {/* Imagem do Cola ai */}
          <View style={styles.fundo}>
            <Image
              style={{ height: 84, width: 300 }}
              source={require('../../../../../assets/img/Museus/museusTxt.png')}
            />
          </View>
        </View>
      <ScrollView>
        <View style={styles.cards}>
          <View style={styles.TeatrosArea}>
            <Image
              style={styles.TeatrosFoto}
              source={require('../../../../../assets/img/Museus/teatro_1.png')}
            />
            <View style={styles.TeatrosLocal}>
              <Text style={{ fontSize: 28, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                MUSEU CATAVENTO
              </Text>
              <View style = {{flexDirection:'row', height: 78}}>
                <Image
                    style={{ height: 30, width: 22, marginLeft: 5}}
                    source={require('../../../../../assets/img/Museus/Point.png')}
                />
                <Text
                    style={{
                    fontSize: 19,
                    textAlign: 'center',
                    color: '#A6A6A6',
                    }}
                >
                  Avenida Mercúrio, Parque Dom Pedro II,
                  s/n, São Paulo - SP, 03003-060
                </Text>
              </View>
              <TouchableOpacity
                style={styles.button}
                onPress={() => navigation.navigate('Evento')}
              >
                <Text style={styles.buttonText}>Saber mais</Text>
              </TouchableOpacity>
            </View>
          </View>
        </View>
      </ScrollView>
      <NavBar />
    </View>
  );
}
