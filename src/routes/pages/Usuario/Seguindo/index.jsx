import { View, Text, Pressable, Image, ScrollView, } from 'react-native';
import styles from '../../../../Components/Styles/Seguindo/seguindoStyle';

export default function Sobre({ navigation }) {

  return (
      <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 50, width: 45 }}
                source={require('../../../../../assets/img/Seguindo/superiorDireito.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 70, width: 28, marginTop: 120}}
                source={require('../../../../../assets/img/Seguindo/direito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
          <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 155, width: 65, marginBottom: 100}}
                source={require('../../../../../assets/img/Seguindo/esquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end'}}>
              <Image
                style={{ height: 150, width: 120,}}
                source={require('../../../../../assets/img/DadosPessoais/inferiorDireito.png')}
              />
            </View>
          </View>
        </View>
        
        <ScrollView>
            <View style={{paddingHorizontal: 10}}>
                <View style={{ flexDirection: 'row', alignItems: 'center'}}>
                <Pressable onPress={() => navigation.navigate('Perfil')}>
                    <Image
                    style={{ height: 30, width: 30 }}
                    source={require('../../../../../assets/img/Contato/back.png')}
                    />
                </Pressable>
                <Text style={styles.titulo}>Seguindo</Text>
                </View>
                <Text style={styles.texto}>Acompanhe os perfis  das Organizações que você segue</Text>
            </View>
            <View style={styles.formulario}>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100 }}
                    source={require('../../../../../assets/img/Seguindo/notif.png')}
                    />
                <Text style={styles.textoConfig}>
                    Organização de eventos populares tendo foco para crianças da periferia 
                </Text>
                </View>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100 }}
                    source={require('../../../../../assets/img/Seguindo/notif.png')}
                    />
                <Text style={styles.textoConfig}>
                    Organização de eventos populares tendo foco para crianças da periferia 
                </Text>
                </View>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100 }}
                    source={require('../../../../../assets/img/Seguindo/notif.png')}
                    />
                <Text style={styles.textoConfig}>
                    Organização de eventos populares tendo foco para crianças da periferia 
                </Text>
                </View>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100 }}
                    source={require('../../../../../assets/img/Seguindo/notif.png')}
                    />
                <Text style={styles.textoConfig}>
                    Organização de eventos populares tendo foco para crianças da periferia 
                </Text>
                </View>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100 }}
                    source={require('../../../../../assets/img/Seguindo/notif.png')}
                    />
                <Text style={styles.textoConfig}>
                    Organização de eventos populares tendo foco para crianças da periferia 
                </Text>
                </View>
            </View>
        </ScrollView>
    </View> 
  );
};